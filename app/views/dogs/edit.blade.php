@extends('layouts.master')

@section('content')

    <h1>Edit Post</h1>

    {{ Form::model($post,array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
        @include('posts.create-edit-form')
    {{ Form::close() }}
@stop