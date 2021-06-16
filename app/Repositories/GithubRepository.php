<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\TooManyRedirectsException;

use DB, Cache;

class GithubRepository 
{
	protected $client;

	protected $user;

	protected $uri;

	public function __construct()
    {
    	$this->username  = config('github.username');
    	$this->uri       = config('github.api').'/users/';

        $this->client = new Client([
            'base_uri' => $this->uri,
            'timeout'  => 10.0,
            'headers'  => array(
                'Accept'   => 'application/vnd.github.v3+json'
            )
        ]);
    }

    /**
     * return API response
     *
     * @return response
     */

    public function getResponse($uri)
    {
    	$res = [];
    	$response = $this->client->request('GET', $this->username.$uri);
        if($response->getStatusCode() == 200){
            $res = json_decode($response->getBody()->getContents());
        }
	    return $res;
    }

    /**
     * Store own git repositories in cache
     *
     * @return collection
     */

    public function getOwnGitRepos()
    {
    	cache()->forget('git_repos');
        return Cache::remember('git_repos', 720 ,function () {
            $res = $this->getResponse('/repos?type=source');
            return collect($res)->sortByDesc('stargazers_count')->values();
        });
    }
}