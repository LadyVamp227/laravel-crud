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

Auth::routes();

Route::get('/home','ButtonsController@homeConfigButtons')->name('home');
Route::get('/delete','ButtonsController@delete');
Route::get('/config', 'ButtonsController@config');
Route::post('/config','ButtonsController@InsertDB');
Route::get('/edit','ButtonsController@edit');
Route::post('/edit','ButtonsController@update');
