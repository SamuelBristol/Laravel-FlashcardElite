@extends('layouts.master')

@section('content')

@foreach($cards as $card)
	<div class="flashcard">
      <p class="title">{{ $card->name }}</p>
      <a class="delete" href="/deleteCard/{{ $card->id }}">X</a>
		<hr>
      <p>{{ $card->desc }}</p>
      <a class="edit" href="/editCard/{{ $card->id }}">Edit</a>
	</div>
@endforeach

@stop