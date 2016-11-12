<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comment;

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
        $news = Posts::orderBy('id', 'DESC')->get();
        $comment = \DB::table('comment')
                    ->join('users', 'comment.user_id', '=', 'users.id')
                    ->select('users.*', 'comment.*')
                    ->where('comment.news_id', '=', 'posts.id')
                    ->get();
        return view('admin/home', ['post' => $news, 'comment' => $comment]);
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
