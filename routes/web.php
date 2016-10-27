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
Route::get('/news/show/{id}-{slug}','PageController@news');
Route::get('/teams','TeamsController@index');
Route::get('/sponsors','PageController@sponsors');
Route::get('contact',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
Route::get('about', function () {
    return view('about');
});


// Login
Route::group(['middleware' => ['web']], function() {
    Route::get('/adm/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('/adm/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('/adm/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
});
// Registration Routes...
    Route::get('/adm/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('/adm/register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
    Route::get('/adm/password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('/adm/password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('/adm/password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('/adm/password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);

Route::get('admin', 'HomeController@index');
Route::get('admin/create-news',
  ['as' => 'create-news', 'uses' => 'CreateNewsController@create']);
  Route::post('admin/create-news',
    ['as' => 'news_store', 'uses' => 'CreateNewsController@store']);
Route::resource('admin/edit-news', 'EditNewsController');
Route::get('admin/delete-news', 'DeleteNewsController@index');
Route::get('admin/delete-news/{id}', 'DeleteNewsController@deleteNews');
