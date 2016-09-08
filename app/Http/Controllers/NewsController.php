<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\Sponsors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug) {
        // find first -
        $pos = strstr($slug, "-") + 1;
        $id = substr($slug, 0, $pos);

        $post = Posts::where('id', $id)->first();
        
        if(count($post) == 0)
            return "Error";

        return view('news', ['post' => $post]);
    }
}