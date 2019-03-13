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

	Route::get('/create', 'categoryController@createNewCategory')->name('categories.create');
	Route::post('create', 'categoryController@storeNewCategory');

	Route::get('{id}/edit', 'categoryController@editCategory')->name('categories.edit');
	Route::post('{id}/edit', 'categoryController@updateCtegory');

	Route::get('{id}/destroy', 'categoryController@deleteCategory')->name('categories.destroy');
});

Route::get('/', 'blogsController@index')->name('blogs.index');

Route::group(['prefix' => 'blogs'], function () {
	Route::get('/create', 'blogsController@createNewBlog')->name('blogs.create');
	Route::post('/create', 'blogsController@storeNewBlog');

	Route::get('/about', 'blogsController@about')->name('blogs.about');

	Route::get('{id}/edit', 'blogsController@editBlog')->name('blogs.edit');
	Route::post('{id}/edit', 'blogsController@updateBlog');

	Route::get('{id}/show', 'blogsController@showBlogDetail')->name('blogs.show');

	Route::get('{id}/destroy', 'blogsController@deleteBlog')->name('blogs.destroy');
});
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('/page-guest', 'HomeController@showPageGuest');

Route::get('/page-admin', 'HomeController@showPageAdmin');
