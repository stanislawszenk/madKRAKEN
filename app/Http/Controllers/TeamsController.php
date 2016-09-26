<?php

namespace App\Http\Controllers;

use App\Teams;
use App\Players;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index() {
        $teams_players = \DB::table('team_players')
            ->join('teams', 'id_team', '=', 'teams.id')
            ->get(['teams.*', 'team_players.name']);

        return view('teams', ['team_player' => $teams_players]);
    }

}
