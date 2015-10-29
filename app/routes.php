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

Route::get('about', function()
{
    return View::make('about');
});

Route::get('contact', function()
{
    return View::make('contact');
});

Route::resource('dogs', 'DogsController');
Route::get('/', 'DogsController@index');
Route::get('/fundoggepics', 'DogsController@fun');
Route::get('/gender/{gender}', 'DogsController@gender');
Route::get('/retired/{gender}', 'DogsController@retired');
Route::get('/puppies/{past}', 'DogsController@puppies');


//login routes
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');