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

Route::prefix('customer')->group(function () {
	Route::get('index', 'customer@index');

	Route::get('create', 'customer@create')->name('create');

	Route::post('store', 'customer@store')->name('store');

	Route::get('{id}/show', 'customer@show')->name('show');

	Route::get('{id}/edit', 'customer@edit')->name('edit');

	Route::patch('{id}/update', 'customer@update')->name('update');

	Route::delete('{id}', 'customer@destroy')->name('delete');
});
