@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>Retired {{{ $key->gender }}}s</title>@stop
@section('content')
  <h1 class="canevalee centeredText">Retired {{{ $key->gender }}}s</h1><hr>
    @foreach($dogs as $key)
        <div class="row">
            <div class="col-md-12">
                <a href="{{{action('DogsController@show', $key->name)}}}">
                    <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url }}}" alt="">
                </a>
                @if(Auth::id() == $key->user_id)
                    <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                @endif
            </div>
            <hr>
        </div>
    @endforeach
@stop