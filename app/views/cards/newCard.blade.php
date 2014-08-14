@extends('layouts.master')
	@section('content')
      {{ Form::open(array('url' => 'insertCard')) }}
        {{ Form::label('name', 'Card Name') }}
        {{ Form::text('name') }}
        {{ Form::label('desc', 'Card Description') }}
        {{ Form::textarea('desc') }}
        {{ Form::submit('Save') }} 
      {{ Form::close() }}
	@stop