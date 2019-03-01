<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController {

	public function index() {
		return view('index');
	}

	public function add() {
		return view('add');
	}

	public function store(Request $request) {
		//
	}

	public function show($id) {
		$Customer = [
			0 => ['id' => '1',
				'name' => 'james bond',
				'phone' => '30393012930213',
				'email' => 'asdsadas@gmail.com'],
		];
		return view('customerInfo');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
