<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Football;

class CompetitionsController extends Controller
{

    // public function list(){

         //List all teams for a certain competition.
         //$get = Football::getLeagueTeams(444);
         //$teams = $get->teams;
        
         //debug teams
         //dd($teams);

        //List all teams for a certain competition.
        //$dataLeagueTeams = Football::getLeagueTeams(444);
        //$teams = $dataLeagueTeams->teams;
        
        // debug teams (dump && die)
        // dd($teams); 

    //     return view('Filters/competitions', compact('teams'));
    // }

    public function listLeagues(){

        //List all the competitions.
        $leagues = Football::getLeagues();

        return view('Filters/competitions', compact('leagues'));
    }

    // public function listTeams($idLeague){

    //     //List all the teams in a competition.
    //     $leagueTeams = Football::getLeagueTeams($idLeague);
    //     $teams = $leagueTeams->teams;

    //     //dd($teams);

    //     return view('Filters/details', compact('teams'));
    //}    

    public function competitionDetails($idLeague){

        //List all the competitions.
        $id = $idLeague;

        //dd($teams);

        return view('Filters/details')->with('id', $id);
    }

    public function competitionTable($id){

        //List all the competitions.
        $getLeagueTable = Football::LeagueTable($id);
        $leagueTable = $getLeagueTable->standing;

        //dd($leagueTable);

        return view('Filters/table', compact('leagueTable'));


    }

    
}



 