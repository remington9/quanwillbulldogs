@extends('layouts.master')

@section('content')

    <h1 class="centeredText">Edit Post</h1>
    <h3 class="centeredText">Current images are not shown but will remain the same unless a new one is uploaded in its place.</h3>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            {{ Form::model($singleDog,array('action' => array('DogsController@update', $singleDog->id), 'method' => 'PUT')) }}
                @include('dogs.partials.create-edit-form')
            {{ Form::close() }}
        </div>
    </div>
@stop