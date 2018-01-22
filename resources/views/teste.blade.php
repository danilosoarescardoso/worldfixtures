
@extends('principal')

@section('conteudo')


	

    <!--$id = '444';
    //Show League Table / current standing	
	//$results = Football::LeagueTable($id); 			 	

	//echo serialize($results); -->


<?php
	$id = '444';
	//List all fixtures for a certain competition.
	$table = Football::LeagueTable($id);   

	echo serialize($table);

?>


@stop