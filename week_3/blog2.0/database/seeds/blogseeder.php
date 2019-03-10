<?php

use App\blogs;
use Illuminate\Database\Seeder;

class blogseeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$blog = new blogs;
		$blog->title = 'Why Earl Scruggs was the Beethoven of the banjo';
		$blog->content = 'reeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee';
		$blog->author = 'Pepe Frog';
		$blog->category_id = '1';

		$blog->save();

	}
}
