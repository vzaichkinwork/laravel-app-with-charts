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

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/', 'ProcessController@indexlogin');

Route::get('/home', 'ProcessController@homepage');

Auth::routes();

Route::get('/form', 'ProcessController@showForm');
Route::post('/save', 'ProcessController@store');

Route::get('/charts', 'ProcessController@charts');

Route::get('/export', 'ExportController@export')->name('export');

Route::get('create-chart/{type}', 'ChartController@makeChart')->name('create-chart');

?>