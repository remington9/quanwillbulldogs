@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}s</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}s</h1><hr>
    @foreach($dogs as $key)
        <div class="row">
            <img class="img-responsive col-md-4 thumbnail" src="/img/dogs/{{{ $key->img_url }}}" alt="">
        </div>
    @endforeach
@stop