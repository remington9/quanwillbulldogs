@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}</h1><hr>
    <div class="row">
        @foreach($dogs as $key)
                <img class="img-responsive col-lg-4 col-md-4 col-xs-12 col-sm-12 thumbnail" src="/img/dogs/{{{ $key->img_url }}}" alt="">
        @endforeach
    </div>
@stop