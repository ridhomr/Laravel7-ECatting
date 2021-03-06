<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\homeController');

Route::get('posts', 'App\Http\Controllers\PostController@index');

Route::get('posts/create', 'App\Http\Controllers\PostController@create');
Route::post('posts/store', 'App\Http\Controllers\PostController@store');

Route::get('posts/{post:slug}/edit', 'App\Http\Controllers\PostController@edit');
Route::patch('posts/{post:slug}/edit', 'App\Http\Controllers\PostController@update');

Route::delete('posts/{post:slug}/delete', 'App\Http\Controllers\PostController@destroy');

Route::get('posts/{post:slug}', 'App\Http\Controllers\PostController@show');

Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/login', 'login');