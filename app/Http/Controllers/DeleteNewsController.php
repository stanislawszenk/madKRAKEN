<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateNewsFormRequest;
use App\Posts;

class DeleteNewsController extends Controller
{
    public function index()
    {
        $news = Posts::orderBy('created_at', 'desc')->get();
        return view('admin/delete_news', ['news' => $news]);
    }
    public function deleteNews($id){
            \DB::table('posts')->where('id', '=', $id)->delete();
            return Redirect('admin/delete-news')->with('message', 'Post deleted');
    }
}
