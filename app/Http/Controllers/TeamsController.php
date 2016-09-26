<?php

namespace App\Http\Controllers;

use App\Teams;
use App\Players;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index() {
        $team = \DB::table('teams')->join('team_players', 'id_team', '=', 'teams.id');
        $players = \DB::table('team_players')->join('teams', 'teams.id', '=', 'team_players.id_team');
        $teams = $team->union($players)->get();
        return view('teams', ['teams'=> $teams]);
    }

}
