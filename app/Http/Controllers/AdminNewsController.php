<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateNewsFormRequest;
use App\Posts;
use Auth;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = Posts::all();
        return view('admin/news/home', ['news' => $news]);
    }
}
