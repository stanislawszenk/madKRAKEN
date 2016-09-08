<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\Sponsors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $news = Posts::all();
        $sponsors = Sponsors::all();

        return view('index', ['news' => $news, 'sponsors' => $sponsors]);
    }
}