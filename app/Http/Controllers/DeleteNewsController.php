<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateNewsFormRequest;
use App\Posts;
use Auth;

class DeleteNewsController extends Controller
{
    public function index()
    {
        if(Auth::user()->admin == 1){
            $news = Posts::orderBy('created_at', 'desc')->get();
            return view('admin/delete_news', ['news' => $news]);
        }else{
            return view('admin/permission');
        }
    }
    public function deleteNews($id){
            \DB::table('posts')->where('id', '=', $id)->delete();
            return Redirect('admin/news')->with('message', 'Post deleted!');
    }
}
