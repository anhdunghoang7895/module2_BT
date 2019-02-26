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

Route::get('/greeting/{name?}', function ($name = null) {

	if ($name) {

		echo 'Hello ' . $name . '!';

	} else {

		echo 'Hello World!';

	}

});

Route::get('login', function () {
	echo 'Hello Word';
});

Route::get('login', function () {
	return view('login');
});

Route::post('login', function (Illuminate\Http\Request $request) {
	if ($request->username == 'admin'
		&& $request->password == 'admin') {
		return view('welcome_admin');
	}

	return view('login_error');
});

Route::get('calculator', function () {
	return view('Calculator');
});

Route::post('calculator', function (Illuminate\Http\Request $request) {
	if ($request->productDescription != null && $request->ListPrice != null && $request->DiscountPercent != null) {
		$productDescription = $request->productDescription;
		$ListPrice = $request->ListPrice;
		$DiscountPercent = $request->DiscountPercent;
		$DiscountAmount = $ListPrice * $DiscountPercent * 0.1;

		return view('show_discount_amount', compact('productDescription', 'ListPrice', 'DiscountPercent', 'DiscountAmount'));
	} else {
		return view('Calculator_error');
	}

});