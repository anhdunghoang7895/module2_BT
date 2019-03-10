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

Route::get('/', 'blogController@index')->name('index');

Route::get('/about', 'blogController@about')->name('about');

Route::get('/create', 'blogController@create')->name('create');

Route::post('/create', 'blogController@store');

Route::get('/list', 'blogController@list')->name('list');

Route::get('{id}/showDetail', 'blogController@showDetail')->name('showDetail');

Route::get('{id}/edit', 'blogController@edit')->name('edit');

Route::post('{id}/edit', 'blogController@update');

Route::get('{id}/destroy', 'blogController@destroy')->name('destroy');