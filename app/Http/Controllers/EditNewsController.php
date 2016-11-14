<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateNewsFormRequest;
use App\Posts;
use Auth;

class EditNewsController extends Controller
{

     /**
      * Create a news.
      *
      * @param  array  $data
      * @return News
      */
      static function resumeText($str, $charset='utf-8')
      {
          $resume = strip_tags($str);
          $resume = html_entity_decode($resume);
          $resume = urldecode($resume);
          $resume = preg_replace('/ +/', ' ', $resume);
          $resume = trim($resume);
          return $resume;
      }
      static function slug($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    $str = strtolower($str);
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('# #', '-', $str);
    return $str;
}
    public function create(){
        $id = new Posts();
    }
    public function index()
    {
        if(Auth::user()->admin == 1){
            $news = Posts::orderBy('created_at', 'desc')->get();
            return view('admin/edit_news', ['news' => $news]);
        }else{
            return view('admin/permission');
        }
    }

    public function edit($id){
        $post = Posts::where('id', $id)->first();

        if(count($post) == 0)
            return "Error";

        return view('admin/news/edit-news-selected', ['post' => $post], compact('id'));
    }
    public function update($id, CreateNewsFormRequest $request)
{
    $data = $request->all();
    $data['user_id'] = $request->user()->name;
    $slug = $this->slug($data['title']);
    $resume = $this->resumeText($data['content']);
    $file = $data['images'];
    $destinationPath = 'uploads/news/';
    $file->move($destinationPath,$file->getClientOriginalName());
    $images = '/'.$destinationPath.''.$file->getClientOriginalName();
    \DB::table('posts')
    ->where('id', $id)
    ->update(['author' => $data['user_id'], 'images' => $images, 'content' => $data['content'], 'resume' => $resume, 'slug' => $slug, 'title' => $data['title'], 'updated_at' => date('Y-m-d H:i:s')]);
    return redirect()->back()->with('message', 'News Updated!');
}
}
