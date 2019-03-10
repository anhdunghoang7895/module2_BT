<?php

namespace App\Http\Controllers;

use App\blogs;
use App\categories;
use Illuminate\Http\Request;

class blogsController extends Controller {

	public function index() {
		$blogs = blogs::all();

		return view('blogs.index', compact('blogs'));
	}

	public function create() {
		$categories = categories::all();
		return view('blogs.create', compact('categories'));
	}

	public function store(Request $request) {
		$category = categories::all();
		$blog = new blogs;
		$blog->title = $request->title;
		$blog->author = $request->author;
		$blog->content = $request->content;
		if ($category->type == $request->type) {
			return $blog->category_id = $category->type;
		}

		$blog->save();
		return redirect()->route('blogs.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
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
