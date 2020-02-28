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

Route::get('/home','ButtonsController@homeConfigButtons')->name('home')->middleware(\App\Http\Middleware\Authenticate::class);
Route::get('/delete','ButtonsController@delete')->middleware(\App\Http\Middleware\Authenticate::class);
Route::get('/config', 'ButtonsController@config')->middleware(\App\Http\Middleware\Authenticate::class);
Route::post('/config','ButtonsController@InsertDB')->middleware(\App\Http\Middleware\Authenticate::class);
Route::get('/edit','ButtonsController@edit')->middleware(\App\Http\Middleware\Authenticate::class);
Route::post('/edit','ButtonsController@update')->middleware(\App\Http\Middleware\Authenticate::class);
