<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PlayersFormRequest;
use App\Players;
use App\Teams;

class AdminTeamsController extends Controller{
    public function index(){
            $players = Players::all();
            $teams = Teams::where('id', $players->id_team);
        return view('admin/players/home', ['players' => $players, 'teams' => $teams]);
    }
    public function create(){
        $id = new Players();
    }
    public function store(PlayersFormRequest $request){
        $name = $request->name;
        $firstname = $request->firstname;
        $nickname = $request->nickname;
        $description = $request->description;
        $id_team = $request->id_team;
        $image = $request->file('images');
        $destinationPath = 'uploads/teams/';
        $image->move($destinationPath,$image->getClientOriginalName());
        $images = '/'.$destinationPath.''.$image->getClientOriginalName();
        \DB::insert('insert into team_players (name, firstname, nickname, description, id_team, images) values(?,?,?,?,?,?)',
              [$name,$firstname,$nickname,$description,$id_team,$images]);
        return redirect()->back()->with('message', 'Player added to the team successfully!');
    }
    public function edit($id){
        $players = Players::where('id', $id)->first();
        $team = Teams::where('id', $players->id_team);
        return view('admin/players/edit-teams-selected', ['players' => $players, 'team' => $team])
    }
    public function update($id, PlayersFormRequest $request){
        $image = $request->file('images');
        $destinationPath = 'uploads/teams/';
        $image->move($destinationPath,$image->getClientOriginalName());
        $images = '/'.$destinationPath.''.$image->getClientOriginalName();
        \DB::table('teams')
        ->where('id', $id)
        ->update(['images' => $images]);
        return redirect()->back()->with('message', 'Team updated with success!');
    }
    public function destroy($id){
        $team = Players::findOrFail($id);
        $team->delete();
        return redirect()->back()->with('message', 'Team deleted');
    }
}
