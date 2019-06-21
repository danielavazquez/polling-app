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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/polls', 'PollController@index');
Route::get('/polls/{id}/edit', 'PollController@edit');
Route::get('/polls/create', 'PollController@create');
Route::post('/polls', 'PollController@store');
Route::post('/polls/{id}', 'PollController@update');
