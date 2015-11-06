@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}</h1><hr>
        @for($i=0;$i<$totalPics;)
        @if($i%4 == 0)
            <div class="row">
        @endif     
        <div class=" col-md-3 col-xs-12">
            <img class="img-responsive thumbnail " src="/img/dogs/{{{ $pics[$i] }}}" alt="">
            @if(Auth::id())
                <a href="{{{action('DogsController@edit', $dogsId[$i] )}}}" class="btn btn-warning btn-block">Edit</a>
            @endif
        </div>
        <?php $i++ ?>
        @if($i%4 == 0 && $i>0)
            </div>
        @endif
    @endfor
@stop