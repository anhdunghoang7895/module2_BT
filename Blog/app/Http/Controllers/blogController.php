<?php

namespace App\Http\Controllers;

use App\blogInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller {

	public function index() {
		return view('index');
	}

	public function about() {
		return view('about');
	}

	public function create() {
		return view('create');
	}

	public function list() {
		$blogs = blogInfo::all();
		return view('list', compact('blogs'));
	}

	public function store(Request $request) {
		$blog = new blogInfo;
		$blog->title = $request->title;
		$blog->content = $request->content;

		$blog->save();
		return redirect()->route('list');
	}

	public function showDetail($id) {
		$blog = blogInfo::findOrFail($id);
		return view('showDetail', compact('blog'));
	}

	public function edit($id) {
		return view('edit');
	}

	public function update(Request $request, $id) {

		$blog = blogInfo::findOrFail($id);
		$blog->title = $request->title;
		$blog->content = $request->content;
		$blog->save();

		return redirect()->route('list');
	}

	public function destroy($id) {
		$blog = blogInfo::findOrFail($id);
		$blog->delete();
		return redirect()->route('list');
	}
}
