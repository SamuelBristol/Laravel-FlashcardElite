<h2>Edit A Card</h2>
@extends('layouts.master')
	@section('content')
      {{ Form::open(array('url' => 'updateCard')) }}
        {{ Form::label('name', 'Card Name') }}
        {{ Form::text('name', $card->name) }}
        {{ Form::label('desc', 'Card Description') }}
        {{ Form::textarea('desc', $card->desc) }}
		{{ Form::hidden('id', $card->id) }}
        {{ Form::submit('Save') }} 
      {{ Form::close() }}
	@stop