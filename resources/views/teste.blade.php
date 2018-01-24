
@extends('principal')

@section('conteudo')

	<ul>
	@foreach($leagues as $league)

		<button type="button" class="btn btn-default">{{ $league->caption }}</button>

	@endforeach
	</ul>

@stop