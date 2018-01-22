<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Football;

class CompetitionsController extends Controller
{

    public function list(){

        //List all teams for a certain competition.
        $table = Football::getLeagueTeams(444);           

        $array = json_decode(json_encode($table), true);

        //echo $array['count'];
        print_r(array_keys($array));
        //print_r($array);


        return 'teste';
    }
}
