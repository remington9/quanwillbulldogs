@extends('layouts.master')

@section('content')

    <h1>Create Post</h1>

    {{ Form::open(array('action' => 'DogsController@store', 'files' => true)) }}
        @include('dogs.partials.create-form')
    {{ Form::close() }}

@stop