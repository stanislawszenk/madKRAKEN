<?php
namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CommentFormRequest;

class NewsController extends Controller
{

public function index($id) {
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

public function update(CommentFormRequest $request, $id){
    $message = $request->message;
    $user = Auth::user()->id;
    \DB::insert('insert into comment (news_id, user_id, message) values(?,?,?)',
     [$id, $user, $message]);
}
}
