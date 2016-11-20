<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin == 1){
        $news = Posts::orderBy('id', 'DESC')->get();
        $user = User::all();
        $number = Posts::count();
        return view('admin/home', ['post' => $news, 'user'=>$user, 'num' => $number]);
    }else{
        return view('admin/permission');
    }
}
}
