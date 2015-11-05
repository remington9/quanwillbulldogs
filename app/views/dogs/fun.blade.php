@extends('layouts.master')
@section('title')
    <title>Fun Dogge Pics</title>
@stop
@section('content')
<div class="row">
        <?php $i=0; ?>
        @foreach($dogs as $key)
            @if($i < 4)
                   <div class="col-md-3 col-xs-12 ">
                       <img class="thumbnail img-responsive" src="/img/dogs/{{{ $key->img_url }}}" alt="">
                       @if(Auth::id() == $key->user_id)
                           <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                       @endif
                   </div>
                   @if($key->img_url2 != '')
                       <div class=" col-md-3 col-xs-12">
                           <img class="img-responsive thumbnail" src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                           @if(Auth::id() == $key->user_id)
                               <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                           @endif
                       </div>
                       <?php $i++ ?>
                   @endif
                <?php $i++ ?>
            @else
                </div>
                <div class="row">
                   <?php $i=0 ?>
                   <div class="col-md-3 col-xs-12 ">
                       <img class="img-responsive thumbnail " src="/img/dogs/{{{ $key->img_url }}}" alt="">
                       @if(Auth::id() == $key->user_id)
                           <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                       @endif
                   </div>
                   <?php $i++ ?>
                   @if($key->img_url2 != '')
                    @if($i < 4)
                       <div class=" col-md-3 col-xs-12">
                           <img class="img-responsive thumbnail " src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                           @if(Auth::id() == $key->user_id)
                               <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                           @endif
                       </div>
                       <?php $i++ ?>
                    @else
                      </div>
                      <div class="row">
                        <?php $i=0 ?>
                        <div class=" col-md-3 col-xs-12">
                            <img class="img-responsive thumbnail " src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                            @if(Auth::id() == $key->user_id)
                                <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                            @endif
                        </div>
                        <?php $i++ ?>
                      </div>
                    @endif
                   @endif
                </div>
            @endif
        @endforeach
@stop