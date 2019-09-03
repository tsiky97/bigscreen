<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    public function survey() {
	    return $this->belongsTo(Survey::class);
	}

	public function choices() {
	    return $this->hasMany(Choice::class);
	}

	public function answers() {
	    return $this->hasMany(Answer::class);
	}
}
