<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TeamsFormRequest;
use App\Teams;

class AdminTeamController extends Controller{
    public function index(){
            $teams = Teams::all();
        return view('admin/teams/home', ['teams' => $teams]);
    }
    public function create(){
        $id = new Teams();
    }
    public function store(TeamsFormRequest $request){
        $name = $request->name;
        $image = $request->file('images');
        $destinationPath = 'uploads/teams/';
        $image->move($destinationPath,$image->getClientOriginalName());
        $images = '/'.$destinationPath.''.$image->getClientOriginalName();
        \DB::insert('insert into teams (images, name) values(?,?)',
              [$images, $name]);
        return redirect()->back()->with('message', 'Team created with success!');
    }
    public function edit($id){
        $team = Teams::where('id', $id)->first();
        return view('admin/teams/edit-teams-selected', ['team' => $team], compact('id'));
    }
    public function update($id, TeamsFormRequest $request){
        $name = $request->name;
        $image = $request->file('images');
        $destinationPath = 'uploads/teams/';
        $image->move($destinationPath,$image->getClientOriginalName());
        $images = '/'.$destinationPath.''.$image->getClientOriginalName();
        \DB::table('teams')
        ->where('id', $id)
        ->update(['name' => $name, 'images' => $images]);
        return redirect()->back()->with('message', 'Team updated with success!');
    }
    public function destroy($id){
        $team = Teams::findOrFail($id);
        $team->delete();
        return redirect()->back()->with('message', 'Team deleted');
    }
}
