@extends('layouts.master')

@section('content')

    <h1 class="centeredText">Edit Post</h1>
    <h3 class="centeredText">Current images are not shown but will remain the same unless a new one is uploaded in its place.</h3>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            {{ Form::model($singleDog,array('action' => array('DogsController@update', $singleDog->id), 'method' => 'PUT')) }}
                @include('dogs.partials.create-edit-form')
            {{ Form::close() }}
            <br>
            <br>
            @if(Auth::id() == $singleDog->user_id)
                <button id="delete" class="btn btn-danger btn-block">Delete</button>
            @endif
        </div>
    </div>
    
    {{ Form::open(array('action' => array('DogsController@destroy', $singleDog->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
        
    {{ Form::close() }}
@stop
@section('script')
    <script>
        (function(){
            "use strict";

            $('#delete').on('click', function(){
                var onConfirm = confirm('Are you sure you want to? There is no turning back!');

                if(onConfirm){
                    $('#formDelete').submit();
                }
            });
        })();
    </script>
@stop