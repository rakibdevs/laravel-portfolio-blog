<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Portfolio;
use App\Repositories\GithubRepository;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    

    public function index()
    {
    	$categories = [];//Category::get();
        return view('index', compact('categories'));
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

    public function getGitRepos(Request $request, GithubRepository $git)
    {
        return $git->getOwnGitRepos()->take(9);
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
