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

Route::get('/', 'PostController@posts');

Route::resource('posts','PostController');
Route::resource('users','UserController');

Route::get('/create', function() {
    return view('posts/create');
});

Route::get('/home', function() {
    return redirect()->route('users.show', ['id' => Auth::user()->id]);
});

Auth::routes();
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\loginController@login');
Route::get('/auth/login', 'Auth\loginController@logout');

Route::get('image-upload','ImageController@imageUpload');
Route::post('image-upload','ImageController@imageUploadPost');

