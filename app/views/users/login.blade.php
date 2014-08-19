@extends('layouts.master')
@section('content')
  {{ Form::open(array('url'=>'users/signin')) }}
      <h2>Please Login</h2>
   
      {{ Form::text('username', null, array('placeholder'=>'Username')) }}
      {{ Form::password('password', array('placeholder'=>'Password')) }}
   
      {{ Form::submit('Login')}}
  {{ Form::close() }}
@stop