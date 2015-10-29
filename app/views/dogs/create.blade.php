@extends('layouts.master')

@section('content')

    <h1 class="centeredText">Create Post</h1>
    <div class="jumbotron">
        <div class="well">
            
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                {{ Form::open(array('action' => 'DogsController@store', 'files' => true)) }}
                    @include('dogs.partials.create-edit-form')
                {{ Form::close() }}
            </div>
        </div>
        </div>
    </div>

@stop