@extends('layouts.master')

@section('content')
    <div>
        <strong><u>{{{ $posts->title }}}</u></strong>
        <ul>
            {{{ $posts->body }}}
        </ul>
    </div><br>

    @if(Auth::id() == $posts->user_id)
        <a class="ads-href" href="{{{action('PostsController@edit', $posts->id)}}}"><button class="btn btn-success btn-lrg">Edit</button></a>
        <button id="delete" class="btn btn-danger btn-lrg">Delete</button>
    @endif

    {{ Form::open(array('action' => array('PostsController@destroy', $posts->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
        
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