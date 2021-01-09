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

Route::get('/home', 'PageController@show');
Route::post('/pages', 'PageController@create' );
Route::delete('/pages/{id}', 'PageController@delete');
Route::put('/pages/{id}', 'PageController@update');
