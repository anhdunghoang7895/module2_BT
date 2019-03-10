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

Route::group(['prefix' => 'categories'], function () {
	Route::get('/', 'categoryController@index')->name('categories.index');

	Route::get('/create', 'categoryController@create')->name('categories.create');
	Route::post('create', 'categoryController@store');

	Route::get('{id}/edit', 'categoryController@edit')->name('categories.edit');
	Route::post('{id}/edit', 'categoryController@update');

	Route::get('{id}/destroy', 'categoryController@destroy')->name('categories.destroy');
});

Route::get('/', 'blogsController@index')->name('blogs.index');

Route::group(['prefix' => 'blogs'], function () {
	Route::get('/create', 'blogsController@create')->name('blogs.create');
	Route::post('/create', 'blogsController@store');
});