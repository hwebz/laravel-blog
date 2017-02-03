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
Route::get('/', 'BlogController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/add', 'BlogController@create');
Route::get('/blog/edit/{id}', 'BlogController@edit');
Route::get('/blog/{id}', 'BlogController@show');
Route::delete('/blog/delete/{id}', 'BlogController@destroy');
Route::post('/blog', 'BlogController@store');
Route::put('/blog/edit/{id}', 'BlogController@update');