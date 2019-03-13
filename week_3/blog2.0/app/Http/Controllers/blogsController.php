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

	public function about() {
		return view('blogs.about');
	}

	public function createNewBlog() {
		$categories = categories::all();
		return view('blogs.create', compact('categories'));
	}

	public function storeNewBlog(Request $request) {
		$blog = new blogs;
		$this->validate($request, [
			'title' => 'required|unique:blogs|max:225',
			'author' => 'required|unique:blogs|max:225',
			'content' => 'required',
		]);
		$blog->title = $request->title;
		$blog->author = $request->author;
		$blog->content = $request->content;
		$blog->category_id = $request->categories;

		$blog->save();
		return redirect()->route('blogs.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function showBlogDetail($id) {
		$blog = blogs::find($id);
		$type = categories::find($blog->category_id)->type;
		return view('blogs.show', compact('blog', 'type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function editBlog($id) {
		$blog = blogs::find($id);
		$categories = categories::all();
		return view('blogs.edit', compact('categories', 'blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function updateBlog(Request $request, $id) {
		$blog = blogs::find($id);
		$blog->title = $request->title;
		$blog->content = $request->content;
		$blog->category_id = $request->categories;
		$blog->save();

		return redirect()->route('blogs.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function deleteBlog($id) {
		$blog = blogs::find($id);
		$blog->delete();

		return redirect()->route('blogs.index');
	}
}
