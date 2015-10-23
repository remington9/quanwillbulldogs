@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>Retired {{{ $key->gender }}}s</title>@stop
@section('content')
  <h1 class="canevalee centeredText">{{{ $key->gender }}}s</h1><hr>
    @foreach($dogs as $key)
        <div class="row">
            <a href="{{{action('DogsController@show', $key->name)}}}">
                <img class="img-responsive col-md-12 thumbnail" src="/img/dogs/{{{ $key->img_url }}}" alt="">
            </a>
            <hr>
        </div>
    @endforeach
@stop