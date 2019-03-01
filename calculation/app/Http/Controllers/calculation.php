<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class calculation extends Controller {
	public function getIndex() {
		return view('calculator');
	}
	public function add(Request $request) {
		$firstNum = $request->firstNum;
		$secondNum = $request->secondNum;
		$result = $firstNum + $secondNum;
		return view('add', compact('result'));
	}
}
