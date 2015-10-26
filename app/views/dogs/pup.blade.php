@extends('layouts.master')
@section('title')
    <title>Puppies</title>
@stop
@section('content')
    @foreach($dad as $valueDad)
    @endforeach
    @foreach($mom as $valueMom)
    @endforeach
    @if($past == '0' && $noDogs == '0')
        @foreach($dogs as $key)
            @if($key->past == $past)
                <div class="row" style="margin-left:0px; margin-right:0px;">
                    <div class="jumbotron">
                        <div class="well">
                            <h1 class="centeredText canevalee">{{{$key->name}}}  </h1>
                            <p>Sex: {{{ $key->gender }}} | Born: Oct 01, 2015 | 
                                @if($key->sold == '1')<span class="redText">SOLD</span>
                                @else($key->sold == '0')<span class="greenText">AVAILABLE</span>
                                @endif
                                 | Parents: <a href="{{{action('DogsController@show', $valueDad->name)}}}">{{{ $valueDad->name }}}</a> &amp; <a href="{{{action('DogsController@show', $valueMom->name)}}}">{{{ $valueMom->name }}}</a></p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url }}}" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                <img class="img-responsive thumbnail center" src="/img/dogs/{{{ $key->img_url2 }}}" alt="">
                            </div>
                        </div>
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
    @foreach($dogs as $key)
        @if($key->past == $past && $past == "1")
            <img class="img-responsive col-lg-4 col-md-4 col-xs-12 col-sm-12 thumbnail" src="/img/dogs/{{{ $key->img_url }}}" alt="">
        @endif
    @endforeach
@stop