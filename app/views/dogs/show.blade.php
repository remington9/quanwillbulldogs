@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}</h1><hr>
        @foreach($dogs as $key)
        <div class="jumbotron col-lg-6 col-md-6 col-xs-12 col-sm-12 heightSet">
            <img class="img-responsive thumbnail center maxMin" src="/img/dogs/{{{ $key->img_url }}}" alt="">
        </div>
        @if($key->img_url2 != '')
            <div class="jumbotron col-lg-6 col-md-6 col-xs-12 col-sm-12 heightSet">
                <div class="maxMin">
                <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url }}}" alt="">
                </div>
            </div>
        @endif
        @endforeach
@stop