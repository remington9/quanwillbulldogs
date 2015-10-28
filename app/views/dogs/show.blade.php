@extends('layouts.master')
@section('title')
    @foreach($dogs as $key)
    @endforeach
    <title>{{{ $key->name }}}</title>
@stop
@section('content')
    <h1 class="canevalee centeredText">{{{ $key->name }}}</h1><hr>
    <div class="row">
        <?php $i=1; ?>
        @foreach($dogs as $key)
            @if($i < 4)
               <div class="col-md-3 col-xs-12 ">
                   <img class="thumbnail img-responsive" src="/img/dogs/{{{ $key->img_url }}}" alt="">
               </div>
               @if($key->img_url2 != '')
                   <div class=" col-md-3 col-xs-12">
                       <img class="img-responsive thumbnail" src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                   </div>
                   <?php $i++ ?>
               @endif
                <?php $i++ ?>
            @else
                <div class="row">
                   <div class="col-md-3 col-xs-12 ">
                       <img class="img-responsive thumbnail " src="/img/dogs/{{{ $key->img_url }}}" alt="">
                   </div>
                   <?php $i=1 ?>
                   @if($key->img_url2 != '')
                       <div class=" col-md-3 col-xs-12">
                           <img class="img-responsive thumbnail " src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                       </div>
                       <?php $i=2 ?>
                   @endif
                </div>
            @endif
        @endforeach
    </div>
@stop