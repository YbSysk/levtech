<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return view('index');
});

Route::get('/', 'PostController@index');

Route::get('create', 'PostController@create');

Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');

Route::delete('/posts/{post}', 'PostController@delete');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');