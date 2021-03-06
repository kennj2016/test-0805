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



Route::post('/', 'ContactController@store');
Route::post('/contact/{id}', 'ContactController@update');

Route::get('/', 'ContactController@index');
Route::get('/contact/{id}', 'ContactController@show');
Route::get('/contact', function () {
    return view('contacts.create');
});
