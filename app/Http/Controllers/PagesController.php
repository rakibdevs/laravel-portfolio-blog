<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Message;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TooManyRedirectsException;

use Cache;

class PagesController extends Controller
{
    // home page

    protected $git = 'https://api.github.com/users/';

    protected $client;

    protected $user = 'rakibdevs';


    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->git,
            'timeout'  => 10.0,
            'headers'  => array(
                'Accept'   => 'application/vnd.github.v3+json'
            )
        ]);
    }



    public function index()
    {
    	$categories = Category::get();

        $git_repos = $this->getGitRepos()->take(6);

        return view('index', compact('categories','git_repos'));
    }

    public function getGitRepos()
    {
        Cache::forget('git_repos');
        return Cache::remember('git_repos', 720 ,function () {
            $response = $this->client->request('GET', $this->user.'/repos?type=sources');
            if($response->getStatusCode() == 200){
                $res = json_decode($response->getBody()->getContents());
            }

            return collect($res)->sortByDesc('stargazers_count');
        });
    }

    // portfolio page
    public function portfolio(Request $request)
    {
        $categories = Category::get();
        return view('portfolio', compact('categories'));
        
    }

    // single portfolio by slug
    public function singlePortfolio($slug)
    {
        try{
            
            $portfolio = Portfolio::where('slug',$slug)->first();

            return view('portfolio-single', compact('portfolio'));

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }

    // get all portfolio
    public function getPortfolios(Request $request)
    {
        $category_id = $request->id;
        $query = Portfolio::when($category_id, function ($query, $category_id) {
                        return $query->where('category_id', $category_id);
                    });
        if(isset($request->take)){
            $query->take($request->take);
        }

        $projects = $query->get();

        return response()->json([
            'projects' => $projects

        ]);
        
    }




    // sumbit a message
    public function message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try{
            $message =  Message::create([
                            'name'     => $request->name,
                            'email'    => $request->email,
                            'message'  => $request->message

                        ]);
            if($message){ 
                return redirect()->back()->with('success', 'Your message has been send successfully');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    
}
