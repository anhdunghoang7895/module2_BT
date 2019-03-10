<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller {
	function getIndex() {
		return view('calculator');
	}

	function calculation(Request $request) {
		$firstNum = $request->num1;
		$secondNum = $request->num2;
		$value = $request->value;
		$giatri = 0;
		if ($value == "add") {
			$giatri = $num1 + $num2;
		} else if ($value == "minus") {
			$giatri = $num1 - $num2;
		} else if ($value == "multi") {
			$giatri = $num1 * $num2;
		} else if ($value == "div") {
			$giatri = $num1 / $num2;
		}

		return view('index', compact('giatri'));
	}

}