<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sponsors;
use App\Http\Requests\SponsorsFormRequest;

class SponsorsController extends Controller{

    public function index(){
        $sponsors = Sponsors::all();
        return view('admin/sponsors/home', ['sponsors' => $sponsors]);
    }
    public function create(){
        $id = new Sponsors();
    }
    public function store(SponsorsFormRequest $request){
        $name = $request->name;
        $link = $request->link;
        $description = $request->description;
        $file = $request->file('images');
        $destinationPath = 'uploads/sponsors/';
        $file->move($destinationPath,$file->getClientOriginalName());
        $images = '/'.$destinationPath.''.$file->getClientOriginalName();
             \DB::insert('insert into sponsors (link, description, name, images) values(?,?,?,?)',
              [$link, $description, $name, $images]);
         return Redirect('admin/spons')->with('message', 'Sponsors added to the website.');
    }
    public function edit($id){
        $sponsors = Sponsors::where('id', $id)->first();

        if(count($sponsors) == 0)
            return "Error";

        return view('admin/sponsors/edit-sponsors-selected', ['sponsors' => $sponsors], compact('id'));
    }
    public function update($id, SponsorsFormRequest $request){
            $name = $request->name;
            $link = $request->link;
            $description = $request->description;
            $file = $request->file('images');
            $destinationPath = 'uploads/sponsors/';
            $file->move($destinationPath,$file->getClientOriginalName());
            $images = '/'.$destinationPath.''.$file->getClientOriginalName();
            \DB::table('sponsors')
            ->where('id', $id)
            ->update(['name' => $name, 'link' => $link, 'description' => $description, 'images' => $images]);
             return Redirect('admin/spons')->with('message', 'Sponsors added to the website.');
    }

    public function destroy($id){
		$sponsors = Sponsors::findOrFail($id);
		$sponsors->delete();
		return redirect()->back()->with('message', 'Sponsor suprrimé avec succès');
	}

}
