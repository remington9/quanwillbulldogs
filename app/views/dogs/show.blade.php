@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}s</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}</h1><hr>
    @foreach($dogs as $key)
        <div class="row">
            <img class="img-responsive col-lg-4 col-md-4 col-xs-12 col-sm-12 thumbnail" src="/img/dogs/{{{ $key->img_url }}}" alt="">
        </div>
    @endforeach
@stop