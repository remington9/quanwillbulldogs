<?php

class DogsController extends BaseController {


	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('welcome');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dogs.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		    // create the validator
		    $validator = Validator::make(Input::all(), Dog::$rules);

		    // attempt validation
		    if ($validator->fails()) {
		    	Log::info('Validator failed', Input::all());
		    	Session::flash('errorMessage', 'Something went wrong please refer to the errors below:');
		        // validation failed, redirect to the dog create page with validation errors and old inputs
		        return Redirect::back()->withInput()->withErrors($validator);
		    } else {

		    	$file = Input::file('img_url');
		    	$destinationPath = public_path() . '/img/dogs';
		    	$filename = $file->getClientOriginalName();
		    	Input::file('img_url')->move($destinationPath, $filename);

				$dog = new Dog();
			    $dog->name = Input::get('name');
			    $dog->comment = Input::get('comment');
			    $dog->gender = Input::get('gender');
			    $dog->banner = Input::get('banner');
			    $dog->retired = Input::get('retired');
			    $dog->img_url = $filename;
			    $dog->user_id = Auth::id();
			    $dog->save();
		    	Session::flash('successMessage', 'Your dog was saved successfully');
			    return Redirect::action('DogsController@create');
			}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
		$dog = Dog::where('name',$name)->where('banner', '0')->get();

		if(!$dog){
			Session::flash('errorMessage', "Something went wrong, no dog with name: $name found!");
			App::abort(404);
		}
		Log::info("dog named $name found");
		return View::make('dogs.show')->with('dogs',$dog);
	}

	public function gender($gender)
	{
		$dog = Dog::where('gender', $gender)->where('banner','1')->where('retired','0')->get();
		if(!$dog){
			Session::flash('errorMessage', "Something went wrong, no dog with gender: $gender found!");
			App::abort(404);
		}
		Log::info("$gender dog(s) found");
		return View::make('dogs.gender')->with('dogs',$dog);
	}

	public function retired($gender)
	{
		$dog = Dog::where('gender', $gender)->where('banner','1')->where('retired','1')->get();
		if(!$dog){
			Session::flash('errorMessage', "Something went wrong, no retired dogs with gender: $gender found!");
			App::abort(404);
		}
		Log::info("$gender dog(s) found");
		return View::make('dogs.retired')->with('dogs',$dog);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
