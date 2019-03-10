<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBlogIdToCatergory extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('catergory', function (Blueprint $table) {
			$table->integer('blog_id')->nullable()->unsigned();
			$table->foreign('blog_id')->references('id')->on('blog');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('catergory', function (Blueprint $table) {
			//
		});
	}
}
