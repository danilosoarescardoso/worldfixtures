	@extends('principal')


@section('conteudo')

	<h2>Choose one League</h2>

	@foreach($leagues as $league)

		<a href="/competitions/details/{{ $league->id }}"><button type="button" class="btn btn-default" >{{ $league->caption }}</button></a>

	@endforeach


@stop