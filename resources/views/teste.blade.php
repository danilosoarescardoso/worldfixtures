
@extends('principal')

@section('conteudo')

	<ul>
	@foreach($teams as $team)
		<li><strong>Name: </strong> {{ $team->name }}</li>
	@endforeach
	</ul>

@stop