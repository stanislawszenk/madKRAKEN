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

Route::get('/', 'PageController@index');
Route::get('/news/show/{slug}','PageController@news');
Route::get('/teams','PageController@teams');
Route::get('/sponsors','PageController@sponsors');


Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
  return view('contact');
});
