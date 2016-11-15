<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CommentFormRequest;
use App\Comment;
use Auth;

class CommentController extends Controller{

    public function create(){
        $id = new Comment();
    }
    public function store(CommentFormRequest $request){
        $message = $request->message;
        $user = Auth::user()->id;
        $id = $request->news_id;
        \DB::insert('insert into comment (news_id, user_id, message) values(?,?,?)',
         [$id, $user, $message]);
         return redirect()->back()->with('message', 'Comment posted with success!');
    }
    public function edit($id){
        $comment = Comment::where('id', $id)->first();

        if(count($comment) == 0)
            return "Error";

        return view('comment/edit-comment-selected', ['comment' => $comment], compact('id'));
    }
    public function update($id, CommentFormRequest $request){
            $message = $request->message;
            \DB::table('comment')
            ->where('id', $id)
            ->update(['message' => $message]);
             return Redirect()->back()->with('message', 'Comment updated with success!');
    }
    public function destroy($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->back()->with('message', 'Comment deleted.');
    }
}
