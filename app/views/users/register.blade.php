@extends('layouts.master')
@section('content')
  {{ Form::open(array('url'=>'users/create')) }}
      <h2>Please Register</h2>
   
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
   

      {{ Form::text('username', null, array('placeholder'=>'Username')) }}
      {{ Form::password('password', array('placeholder'=>'Password')) }}
      {{ Form::password('password_confirmation', array('placeholder'=>'Confirm Password')) }}
   
      {{ Form::submit('Register')}}
  {{ Form::close() }}
@stop