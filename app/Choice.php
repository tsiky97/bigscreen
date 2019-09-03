<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public $timestamps = false;

    public function survey() {
    	return $this->belongsTo(Survey::class);
    }

    public function question() {
    	return $this->belongsTo(Question::class);
    }
}
