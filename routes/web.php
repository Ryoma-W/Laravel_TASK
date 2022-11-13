<?php

use Illuminate\Support\Facades\Route;

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
    return view('top');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'PostsController@index');
Route::get('/create-form', 'PostsController@createForm');
Route::post('/index', 'PostsController@create');
Route::get('post/{id}/update-form', 'PostsController@updateForm');
Route::post('/index', 'PostsController@update');
Route::get('post/{id}/delete', 'PostsController@delete');
