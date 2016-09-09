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
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
Route::get('about', function () {
    return view('about');
});

