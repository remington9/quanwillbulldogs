@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}</h1><hr>
        @foreach($dogs as $key)
        <div class="col-md-3 col-xs-6">
               <img class="img-responsive thumbnail" src="/img/dogs/{{{ $key->img_url }}}" alt="">
           </div>
           @if($key->img_url2 != '')
               <div class="col-md-3 col-xs-6">
                   <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url }}}" alt="">
               </div>
           @endif
        @endforeach
@stop