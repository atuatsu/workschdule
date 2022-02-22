<?php

use App\Http\Controllers\BoardController;
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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'BoardController@index');
    Route::get('/boards/create', 'BoardController@create');
    Route::post('/boards', 'BoardController@store');
    Route::get('/boards/{board}', 'BoardController@show');
    Route::delete('/boards/{board}', 'BoardController@delete');
    Route::get('/shifts', 'ShiftController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
