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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return view('categorypage');
});

Route::get('/place', 'PageController@getName');

Route::resource('posts','PostController');

Route::get('/home', function() {
    return view('homepage');
});
Route::get('/create-place', function() {
    return view('place/createPlace');
});