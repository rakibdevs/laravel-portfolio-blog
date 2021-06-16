<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('home');
Route::get('/portfolio/', 'PagesController@portfolio');
Route::get('/portfolio/{slug}', 'PagesController@singlePortfolio');
Route::post('/get-portfolios', 'PagesController@getPortfolios');
Route::post('/get-github-repositories', 'PagesController@getGitRepos');
Route::post('/message', 'PagesController@message')->name('message');

Route::get('/docs/number-to-bangla', function () { 
	return view('docs.number-to-bangla'); 
});
Route::get('/my-resume', function () { 
	return view('resume'); 
});

// admin area
Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('admin');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group(['prefix' => 'admin/','middleware' => 'auth'], function(){

	Route::get('dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
	Route::get('portfolio/', 'PortfolioController@index');
	Route::get('portfolio/create', 'PortfolioController@create');
	Route::post('portfolio/store', 'PortfolioController@store');
	Route::get('portfolio/edit/{id}', 'PortfolioController@edit');
	Route::get('portfolio/delete/{id}', 'PortfolioController@destroy');
});
