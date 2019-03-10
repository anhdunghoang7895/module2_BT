<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogInfo extends Model {
	protected $table = "blog";
	public function catergory() {
		return $this->belongsToMany('App\catergory');
	}
}
