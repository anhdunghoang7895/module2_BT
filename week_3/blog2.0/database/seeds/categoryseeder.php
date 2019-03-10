<?php

use App\categories;
use Illuminate\Database\Seeder;

class categoryseeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$categories = new categories();
		$categories->type = 'Music';
		$categories->save();

		$categories = new categories();
		$categories->type = 'fashion';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Car';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Real estate';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Beauty';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Travel';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Design';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Food';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Wedding';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Photography';
		$categories->save();

		$categories = new categories();
		$categories->type = 'Movie';
		$categories->save();

	}
}
