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

Route::get('/', "PostsController@index");

Route::resource('posts', 'PostsController');

Route::get('/posts/{post}/comments/{comment}/edit', 'CommentsController@edit');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::patch('/posts/{post}/comments/{comment}', 'CommentsController@update');
Route::delete('/posts/{post}/comments/{comment}', 'CommentsController@destroy');


Route::get('/about', 'PagesController@about');
Auth::routes();

Route::get('/home', 'PostsController@index');
