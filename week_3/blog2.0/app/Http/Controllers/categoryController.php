<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

class categoryController extends Controller {

	public function index() {
		$category = categories::all();
		return view('categories.index', compact('category'));
	}

	public function create() {
		return view('categories.create');
	}

	public function store(Request $request) {
		$category = new categories;
		$this->validate($request, [
			'type' => 'required|unique:categories|max:225',
		]);
		$category->type = $request->type;
		$category->save();

		return view('categories.create');
	}

	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		return view('categories.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$category = categories::find($id);
		$category->type = $request->type;
		$category->save();

		return redirect()->route('categories.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$category = categories::find($id);
		$category->delete();

		return redirect()->route('categories.index');
	}
}
