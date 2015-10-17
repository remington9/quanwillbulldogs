<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		if(Auth::check()){
			return Redirect::action('PostsController@index');
		}else{
			return View::make('posts.login');
		}
	}
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Email and password combination failed');
			Log::info('validator failed', Input::all());
			return Redirect::action("HomeController@showLogin");
		    // display session flash error
		    // log email that tried to authenticate
		    // return Redirect::action('HomeController@showLogin');
		}
		
	}
	public function doLogout()
	{
		Auth::logout();
		//Session flash for logout
		return Redirect::to('/posts');
	}

}
