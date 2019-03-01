<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages/welcome');
	}
	public function getAbout() {
		$fullname = 'hoang anh dung';
		return view('pages/about', compact('fullname'));
	}
}
