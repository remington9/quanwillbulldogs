<?php

class PostsController extends BaseController {


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

		if(Input::has('search')){
			//PAGINATES QUERY
			$query = Post::with('user');
			$query->WhereHas('user', function($q){
				$search = Input::get('search');
				$q->where('title', 'like', "%$search%");
			});
			// $query = Post::with('user');
			$posts = $query->orderBy('updated_at', 'desc')->paginate(4);
			return View::make('posts.index')->with(['posts'=> $posts]);
		}elseif(Input::has('user')){
			//PAGINATES QUERY
			$query = Post::with('user');
			$query->WhereHas('user', function($q){
				$user = Input::get('user');
				$q->where('first_name', "$user");
			});
			// $query = Post::with('user');
			$posts = $query->orderBy('updated_at', 'desc')->paginate(4);
			return View::make('posts.index')->with(['posts'=> $posts]);
		}else{
			//PAGINATES ALL
			$posts = Post::with('user')->orderBy('updated_at', 'desc')->paginate(4);
			return View::make('posts.index')->with('posts',$posts);
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// var_dump(Input::get());

	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Log::info('Validator failed', Input::all());
	    	Session::flash('errorMessage', 'Something went wrong please refer to the errors below:');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

			$post = new Post();
		    $post->title = Input::get('title');
		    $post->coment = Input::get('coment');
		    $post->user_id = Auth::id();
		    $post->save();
	    	Session::flash('successMessage', 'Your post was created successfully');
		    return Redirect::action('PostsController@index');
		}
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post){
			Session::flash('errorMessage', "Something went wrong, no post with id: $id found!");
			App::abort(404);
		}
		Log::info("post of id $id found");
		return View::make('posts.show')->with('posts',$post);
	}

	public function getManage()
	{
		return View::make('posts.manage');
	}

	public function getList()
	{
		$posts = Post::with('user')->where('user_id', Auth::id())->get();
		return Response::json($posts);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post',$post);
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
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Something went wrong please refer to the errors below:');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = Post::find($id);

			if(!$post){
				Session::flash('errorMessage', "Something went wrong, no post with id: $id found!");
				App::abort(404);
			}

			$post->title = Input::get('title');
		    $post->body = Input::get('body');
		    $post->save();

		    if (Request::wantsJson()) {
		    	return Response::json(array('Status' => 'Success'));
		    }else{
		    	Session::flash('successMessage', 'Your post was updated successfully');
			    return Redirect::action('PostsController@profile');
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

		$post = Post::find($id);
		Post::find($id)->delete();

		if (Request::wantsJson()) {
            return Response::json(array('msg'=>'Your post was deleted successfully'));
        } else {
            return Redirect::action('PostsController@index');
        }

        if(!$post){
			Session::flash('errorMessage', "Something went wrong, no post with id: $id found!");
			App::abort(404);
		}

		
	}


}
