<?php

namespace App\Http\Controllers;

use App\Teams;
use App\Players;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index() {
        //Looking for teams+team_players with innerjoin
       /* $teams = \DB::table('teams')->select('images')->get();
        $players = \DB::table('team_players')
        ->leftJoin('teams', 'id_team', '=', 'teams.id')
        ->get(['team_players.*']);*/

        $teams = \App\Teams::all();

        return view('teams/teams', ['teams'=> $teams]);
    }

}
