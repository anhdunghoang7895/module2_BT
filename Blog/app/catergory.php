<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catergory extends Model {
	protected $table = "catergory";
	public function blog() {
		return $this->belongsToMany('App\blogInfo');
	}
}
