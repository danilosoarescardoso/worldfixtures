<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Football;

class CompetitionsController extends Controller
{

    public function list(){

        //List all teams for a certain competition.
        $teams = Football::getLeagueTeams(444);
        $teams = $teams->teams;
        
        // debug teams
        // dd($teams);

        return view('teste', compact('teams'));
    }
}
