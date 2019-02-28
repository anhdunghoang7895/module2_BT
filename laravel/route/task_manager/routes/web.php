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

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
	Route::get('index', function () {
		// Hiển thị danh sách khách hàng
		return view('index');
	});
	Route::get('add', function () {
		// Hiển thị Form tạo khách hàng
		return view('add');
	});
	Route::get('profile', function () {
		return view('profile');
	});
	Route::get('edit', function () {
		return view('edit');
	});

	// Route::post('store', function () {
	// 	// Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
	// });

	// Route::patch('{id}/update', function () {
	// 	// xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
	// });

	// Route::delete('{id}', function () {
	// 	// Xóa thông tin dữ liệu khách hàng
	// });

});