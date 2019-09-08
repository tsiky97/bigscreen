<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

	public $timestamps = false;

    public function questions() {
	    return $this->hasMany(Question::class);
	}

	public function choices() {
	    return $this->hasMany(Choice::class);
	}

	public function answers() {
	    return $this->hasMany(Answer::class);
	}
}
