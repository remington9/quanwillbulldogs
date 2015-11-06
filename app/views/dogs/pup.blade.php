@extends('layouts.master')
@section('title')
@foreach($dogs as $key)
@endforeach
    <title>Puppies</title>
@stop
@section('content')
    @if($past == '0' && $noDogs == '0')
        @foreach($dogs as $key)
            @if($key->past == $past)
                <div class="row" style="margin-left:0px; margin-right:0px;">
                    <div class="jumbotron">
                        <div class="well">
                            <h1 class="centeredText canevalee">{{{$key->name}}}  </h1>
                            <p>Sex: {{{ $key->gender }}} @if($key->gender == 'Male')<i class="fa fa-mars"></i>@else<i class="fa fa-venus"></i>@endif
                             | Born: Oct 01, 2015 | 
                                @if($key->sold == '1')<span class="redText">SOLD</span>
                                @else($key->sold == '0')<span class="greenText">AVAILABLE</span>
                                @endif
                                 | Parents: <a href="{{{action('DogsController@show', $key->dad)}}}">{{{ $key->dad }}}</a> &amp; <a href="{{{action('DogsController@show', $key->mom)}}}">{{{ $key->mom }}}</a></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url }}}" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                            </div>
                            
                        </div>
                        @if(Auth::id() == $key->user_id)
                                <a href="{{{action('DogsController@edit', $key->id)}}}" class="btn btn-warning btn-block">Edit</a>
                            @endif
                    </div>
                </div>
            @endif
        @endforeach
    @endif
    @if($noDogs == '1')
        <div class="jumbotron">
            <h1 class="centeredText canevalee">Puppies Coming Soon!</h1>
        </div>
    @endif
      @if($key->past == $past && $past == "1")
        <h1 class="centeredText canevalee">Puppies from Past Litters</h1><hr>
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
      @endif
@stop