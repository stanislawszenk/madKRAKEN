<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;

class ProfileController extends Controller{
    public function index($id){
        $user = User::where('id', $id)->first();
        return view('profile/home', ['user' => $user]);
    }
    public function edit($id)
    {
        if(Auth::user()->id == $id || Auth::user()->admin = '1')
        {

            return view('profile/edit-view-selected', ['user' => $user], compact('id'));
        }else{
            return view('profile/permission');
        }
    }
}
