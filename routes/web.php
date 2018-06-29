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

Route::post('sendsms','ContactController@sendsms')->name('sendsms')->middleware('auth');

Route::get('consent/{type}','ExportController@export')->name('consent')->middleware('auth');
Route::get('export/{type}','ExportController@exporteuth')->name('euth')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Route::get('search','ConsentController@search')->name('sr');
    Route::get('searcheuth','EuthController@search')->name('sreuth');
    Voyager::routes();
   
});
