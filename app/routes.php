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
	return View::make('hello');
});


Route::get('/profile', function()
{
	return View::make('profile');
});

Route::get('/statistics', function()
{
	return View::make('statistics');
});

Route::get('/standings', function()
{
	return View::make('standings');
});

Route::get('/create', function()
{
	return View::make('create');
});

Route::get('/about', function()
{
	return View::make('about');
});

