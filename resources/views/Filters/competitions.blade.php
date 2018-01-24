	@extends('principal')


@section('conteudo')

	<h2>Choose one League</h2>

	@foreach($leagues as $league)

		<button type="button" class="btn btn-default">{{ $league->caption }}</button>

	@endforeach

@stop