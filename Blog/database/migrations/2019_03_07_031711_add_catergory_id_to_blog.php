<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatergoryIdToBlog extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('blog', function (Blueprint $table) {
			$table->integer('catergory_id')->nullable()->unsigned();
			$table->foreign('catergory_id')->references('id')->on('catergory');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('blog', function (Blueprint $table) {
			//
		});
	}
}
