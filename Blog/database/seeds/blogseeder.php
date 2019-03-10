<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blogseeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('blog')->insert([
			'title' => 'this is a blog',
			'content' => 'welcome to this blog, have a nice day',
			'catergory_id' => '1',
		]);
		DB::table('catergory')->insert([
			'type' => 'horror',
			'blog_id' => '1',
		]);
	}
}
