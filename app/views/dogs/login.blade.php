@extends('layouts.master')

@section('content')
    <div>
        <h2>Login below</h2>
        <hr>
        {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        <div class="form-group @if($errors->has('email')) has-error @endif">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group @if($errors->has('password')) has-error @endif">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        <button class="btn btn-primary btn-block">Login</button>
        {{ Form::close() }}
    </div>
@stop