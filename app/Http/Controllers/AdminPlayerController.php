<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PlayersFormRequest;
use App\Players;
use App\Teams;

class AdminPlayerController extends Controller{

    public function index(){
            $players = Players::all();
            $teams = Teams::all();
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
              [$name, $firstname, $nickname, $description, $id_team, $images]);
        return redirect()->back()->with('message', 'Player added to the team successfully!');
    }
    public function edit($id){
        $players = Players::where('id', $id)->first();
        $team = Teams::where('id', $players->id_team)->first();
        $teams = Teams::all();
        return view('admin/players/edit-players-selected', ['players' => $players, 'team' => $team, 'teams' => $teams], compact('id'));
    }
    public function update($id, PlayersFormRequest $request){
        $name = $request->name;
        $firstname = $request->firstname;
        $nickname = $request->nickname;
        $description = $request->description;
        $id_team = $request->id_team;
        $image = $request->file('images');
        $destinationPath = 'uploads/teams/';
        $image->move($destinationPath,$image->getClientOriginalName());
        $images = '/'.$destinationPath.''.$image->getClientOriginalName();
        \DB::table('team_players')
        ->where('id', $id)
        ->update(['name' => $name, 'firstname' => $firstname, 'nickname' => $nickname, 'description' => $description,'images' => $images]);
        return redirect()->back()->with('message', 'Player updated with success!');
    }
    public function destroy($id){
        $team = Players::findOrFail($id);
        $team->delete();
        return redirect()->back()->with('message', 'Player deleted');
    }
}
