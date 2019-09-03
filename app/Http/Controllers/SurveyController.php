<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Question;

class SurveyController extends Controller
{
    public function index(Survey $survey) {

    	$questions = Question::with('survey')->get();
    	$questionsCount = Question::with('survey')->count();

    	return view('survey.index', ['questions' => $questions], ['questionsCount' => $questionsCount]);
    }

}
