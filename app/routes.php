<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});
Route::get('about', function ()
{
	return View::make('pages.about');
});
Route::get('projects', function ()
{
	return View::make('pages.projects');
});
Route::get('contact', function ()
{
	return View::make('pages.contact');
});
Route::get('login', array('users' => 'HomeController@showLogin'));

Route::post('login', array('users' => 'HomeController@doLogin'));
