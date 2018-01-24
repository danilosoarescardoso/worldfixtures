	@extends('principal')


@section('conteudo')

	<h2>League Details</h2>


	<button type="button" class="btn btn-default">Fixtures</button>
	<button type="button" class="btn btn-default">Teams</button>
	<button type="button" class="btn btn-default">Table</button>



	@foreach($teams as $team)

		<ul>
			<li>{{ $team->name }}</li>
		</ul>

	@endforeach

@stop