<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['userId', 'answer', 'question_id', 'survey_id', 'created_at'];

	public $timestamps = false;

    public function survey() {
    	return $this->belongsTo(Survey::class);
    }

    public function question() {
    	return $this->belongsTo(Question::class);
    }
}
