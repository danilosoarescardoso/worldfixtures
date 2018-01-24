	@extends('principal')


@section('conteudo')

	<h2>League Table</h2>
	

 	@foreach($leagueTable as $team)

		<ul>
			<li><b>Name:</b> {{ $team->teamName }}</li>
			<li><b>Position:</b> {{ $team->position }}</li>
			<li><b>Points:</b> {{ $team->points }}</li>

		</ul>

	@endforeach 

@stop