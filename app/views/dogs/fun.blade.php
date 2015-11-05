@extends('layouts.master')
@section('title')
    <title>Fun Dogge Pics</title>
@stop
@section('content')
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