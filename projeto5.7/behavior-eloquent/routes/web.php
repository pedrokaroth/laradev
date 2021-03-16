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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/trashed', 'PostController@trashed')->name('posts.trashed');
Route::get('posts/{post}/restor', 'PostController@restore')->name('posts.restore');
route::delete('posts/{post}/forceDelete', 'PostController@forceDelete')->name('posts.forceDelete');
Route::resource('posts', 'PostController');
