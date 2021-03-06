@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->gender }}}s</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->gender }}}s</h1><hr>
    @foreach($dogs as $key)
        <div class="row">
            <a href="{{{action('DogsController@show', $key->name)}}}">
                <div class="col-md-12">
                    <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url }}}" alt="">
                    @if(Auth::id() == $key->user_id)
                        <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                    @endif
                </div>
            </a>
        </div>
        <hr>
    @endforeach
    <div class="row">
        <a href="{{{action('DogsController@retired', $key->gender)}}}">
            <h3 class="centeredText">Retired {{{ $key->gender}}}s</h3>
            <img class="img-responsive col-md-6 col-md-offset-3 thumbnail" src="/img/dogs/retired/retired{{{ $key->gender }}}s.jpg" alt="">
        </a>
    </div>
@stop