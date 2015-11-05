<?php

class DogsController extends BaseController {


	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show', 'gender', 'retired', 'puppies', 'fun')));
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
		$dogs = Dog::where('retired', '0')->where('banner','1')->where('puppy','0')->get();
		$dads[''] = 'select';
		$moms[''] = 'select';
		foreach($dogs as $dog){
			if($dog->gender == 'Male')
				$dads[$dog->name] = $dog->name;
			else
				$moms[$dog->name] = $dog->name;
		}

		$data = [
			'moms'=>$moms,
			'dads'=>$dads
		];
		return View::make('dogs.create')->with($data);
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

		    	if(Input::file('img_url2') != ''){
			    	$file2 = Input::file('img_url2');
			    	$destinationPath = public_path() . '/img/dogs';
			    	$filename2 = $file2->getClientOriginalName();
			    	Input::file('img_url2')->move($destinationPath, $filename2);

	    			$dog = new Dog();
	    		    $dog->name = Input::get('name');
	    		    $dog->comment = Input::get('comment');
	    		    $dog->gender = Input::get('gender');
	    		    $dog->banner = Input::get('banner');
	    		    $dog->retired = Input::get('retired');
	    		    $dog->puppy = Input::get('puppy');
	    		    $dog->past = Input::get('past');
	    		    $dog->sold = Input::get('sold');
	    		    $dog->mom = Input::get('mom');
	    		    $dog->dad = Input::get('dad');
	    		    $dog->fun = Input::get('fun');
	    		    $dog->img_url = $filename;
	    		    $dog->img_url2 = $filename2;
	    		    $dog->user_id = Auth::id();
	    		    $dog->save();
	    	    	Session::flash('successMessage', 'Your dog was saved successfully');
	    		    return Redirect::action('DogsController@create');
			    }

				$dog = new Dog();
			    $dog->name = Input::get('name');
			    $dog->comment = Input::get('comment');
			    $dog->gender = Input::get('gender');
			    $dog->banner = Input::get('banner');
			    $dog->retired = Input::get('retired');
			    $dog->puppy = Input::get('puppy');
			    $dog->past = Input::get('past');
			    $dog->sold = Input::get('sold');
			    $dog->mom = Input::get('mom');
			    $dog->dad = Input::get('dad');
			    $dog->fun = Input::get('fun');
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

		if(count($dog) < 1){
			Session::flash('errorMessage', "Something went wrong, no dog with name: $name found!");
			App::abort(404);
		}
		Log::info("dog named $name found");
		return View::make('dogs.show')->with('dogs',$dog);
	}

	public function gender($gender)
	{
		$dog = Dog::where('gender', $gender)->where('banner','1')->where('retired','0')->get();
		if(count($dog) < 1){
			Session::flash('errorMessage', "Something went wrong, no $gender dogs with found!");
			App::abort(404);
		}
		Log::info("$gender dog(s) found");
		return View::make('dogs.gender')->with('dogs',$dog);
	}

	public function retired($gender)
	{
		$dogs = Dog::where('gender', $gender)->where('banner','1')->where('retired','1')->get();
		if(count($dogs) < 1){
			Session::flash('errorMessage', "Something went wrong, no retired $gender dogs with found!");
			App::abort(404);
		}
		Log::info("$gender dog(s) found");
		return View::make('dogs.retired')->with('dogs',$dogs);
	}

	public function fun()
	{
		
		$dogs = Dog::where('banner','0')->where('fun','1')->get();
		$pics=[];
		$dogsId = [];
		foreach($dogs as $dog){
			if($dog->img_url){
				$pics[] = $dog->img_url;
				$dogsId[] = $dog->id;
			}
			if($dog->img_url2){
				$pics[] = $dog->img_url2;
				$dogsId[] = $dog->id;
			}
		}
		$totalPics = count($pics);
		if(count($pics) < 1){
			Session::flash('errorMessage', "Something went wrong, no fun dog pictures found!");
			App::abort(404);
		}
		$data=[
			'pics'=>$pics,
			'totalPics'=>$totalPics,
			'dogsId'=>$dogsId
		];
		return View::make('dogs.fun')->with($data);
	}

	public function puppies($past)
	{
		$noDog = "0";
		$dog = Dog::where('past', $past)->where('banner','0')->where('puppy','1')->get();

		if(count($dog) < 1){
			$noDog = "1";
		}
		$data = [
			'dogs' => $dog,
			'past' => $past,
			'noDogs' => $noDog,
		];
		return View::make('dogs.pup')->with($data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$singleDog = Dog::find($id);
		$dogs = Dog::where('retired', '0')->where('banner','1')->where('puppy','0')->get();
		$dads[''] = 'select';
		$moms[''] = 'select';
		foreach($dogs as $dog){
			if($dog->gender == 'Male')
				$dads[$dog->name] = $dog->name;
			else
				$moms[$dog->name] = $dog->name;
		}

		$data = [
			'moms'=>$moms,
			'dads'=>$dads,
			'singleDog'=>$singleDog
		];
		return View::make('dogs.edit')->with($data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Dog::$editRules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Something went wrong please refer to the errors below:');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$dog = Dog::find($id);

			if(!$dog){
				Session::flash('errorMessage', "Something went wrong, no dog with id: $id found!");
				App::abort(404);
			}

			if(Input::file('img_url') != ''){
		    	$file = Input::file('img_url');
		    	$destinationPath = public_path() . '/img/dogs';
		    	$filename = $file->getClientOriginalName();
		    	Input::file('img_url')->move($destinationPath, $filename);

		    	if(Input::file('img_url2') != ''){
			    	$file2 = Input::file('img_url2');
			    	$destinationPath = public_path() . '/img/dogs';
			    	$filename2 = $file2->getClientOriginalName();
			    	Input::file('img_url2')->move($destinationPath, $filename2);

	    		    $dog->name = Input::get('name');
	    		    $dog->comment = Input::get('comment');
	    		    $dog->gender = Input::get('gender');
	    		    $dog->banner = Input::get('banner');
	    		    $dog->retired = Input::get('retired');
	    		    $dog->puppy = Input::get('puppy');
	    		    $dog->past = Input::get('past');
	    		    $dog->sold = Input::get('sold');
	    		    $dog->mom = Input::get('mom');
	    		    $dog->dad = Input::get('dad');
	    		    $dog->fun = Input::get('fun');
	    		    $dog->img_url = $filename;
	    		    $dog->img_url2 = $filename2;
	    		    $dog->user_id = Auth::id();
	    		    $dog->save();
	    	    	Session::flash('successMessage', 'Your dog was updated successfully');
	    		    return Redirect::action('DogsController@show', array('name'=>$dog->name));
			    }else{
				    $dog->name = Input::get('name');
				    $dog->comment = Input::get('comment');
				    $dog->gender = Input::get('gender');
				    $dog->banner = Input::get('banner');
				    $dog->retired = Input::get('retired');
				    $dog->puppy = Input::get('puppy');
				    $dog->past = Input::get('past');
				    $dog->sold = Input::get('sold');
				    $dog->mom = Input::get('mom');
				    $dog->dad = Input::get('dad');
				    $dog->fun = Input::get('fun');
				    $dog->img_url = $filename;
				    $dog->user_id = Auth::id();
				    $dog->save();
			    	Session::flash('successMessage', 'Your dog was updated successfully');
				    return Redirect::action('DogsController@show', array('name'=>$dog->name));
				}
			}else{
				$dog->name = Input::get('name');
				$dog->comment = Input::get('comment');
				$dog->gender = Input::get('gender');
				$dog->banner = Input::get('banner');
				$dog->retired = Input::get('retired');
				$dog->puppy = Input::get('puppy');
				$dog->past = Input::get('past');
				$dog->sold = Input::get('sold');
				$dog->mom = Input::get('mom');
				$dog->dad = Input::get('dad');
				$dog->fun = Input::get('fun');
				$dog->user_id = Auth::id();
				$dog->save();
				Session::flash('successMessage', 'Your dog was updated successfully');
			    return Redirect::action('DogsController@show', array('name'=>$dog->name));
			}
		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dog = Dog::find($id);
		if(!$dog){
			Session::flash('errorMessage', "Something went wrong, no dog with id: $id found!");
			App::abort(404);
		}
		Dog::find($id)->delete();

        return Redirect::action('DogsController@index');

        
	}


}
