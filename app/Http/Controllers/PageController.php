<?php

namespace App\Http\Controllers;

use App\Teams;
use App\User;
use App\Posts;
use App\Sponsors;
use App\HotNews;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\CommentFormRequest;
use Auth;

class PageController extends Controller
{
    public function index() {
        $news = Posts::orderBy('id', 'DESC')->take(6)->get();
        $sponsors = Sponsors::take(4)->get();
        $hotnews = HotNews::orderBy('id', 'DESC')->take(6)->get();
        return view('index', ['news' => $news, 'sponsors' => $sponsors, 'hotnews' => $hotnews]);
    }
    public function news($id) {
        $post = Posts::where('id', $id)->first();
        $comment = \DB::table('comment')
                    ->join('users', 'comment.user_id', '=', 'users.id')
                    ->select('users.*', 'comment.*')
                    ->where('comment.news_id', '=', $id)
                    ->get();
        if(count($post) == 0)
            return "Error";

        return view('news/news', ['post' => $post, 'comment' => $comment]);
    }

    public function postComment(CommentFormRequest $request){
        $message = $request->message;
        $id = $request->news_id;
        \DB::insert('insert into comment (news_id, user_id, message) values(?,?,?)',
         [$id, Auth::user()->id, $message]);
         return back();
    }
    public function sponsors() {
        $sponsors = Sponsors::all();

        return view('sponsors/sponsors', ['sponsors'=> $sponsors]);
    }
}
