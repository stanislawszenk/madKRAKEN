<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateNewsFormRequest;
use App\Posts;

class EditNewsController extends Controller
{

     /**
      * Create a news.
      *
      * @param  array  $data
      * @return News
      */
      static function slug($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    $str = strtolower($str);
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('# #', '-', $str);
    return $str;
}
    public function create()
    {
    $news = Posts::orderBy('created_at', 'desc')->take(6)->get();
    return view('admin/edit_news', ['news' => $news]);
    }

    public function edit($slug){
        $id = substr($slug, 0, strstr($slug, "-") + 1);

        $post = Posts::where('id', $id)->first();

        if(count($post) == 0)
            return "Error";

        return view('admin/edit-news-selected', ['post' => $post]);
    }
    public function store(CreateNewsFormRequest $request){
        $title = $request->title;
        $content = $request->content;
        $images = $request->images;
        $user = $request->user()->name;
        $slug = $this->slug($title);
             \DB::insert('insert into posts (author, images, content, slug, title) values(?,?,?,?,?)',
              [$user, $images, $content, $slug, $title]);
         return Redirect('admin/create-news')->with('message', 'Post published');
    }
}
