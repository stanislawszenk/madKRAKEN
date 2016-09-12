<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
    public function create_news()
    {
        return view('admin/create_news');
    }
    public function edit_news()
    {
        return view('admin/edit_news');
    }
    public function delete_news()
    {
        return view('admin/delete_news');
    }
}
