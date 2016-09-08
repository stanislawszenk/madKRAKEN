<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@index');
Route::get('teams', 'IndexController@teams');
Route::get('sponsors', 'IndexController@sponsors');

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
  return view('contact');
});
