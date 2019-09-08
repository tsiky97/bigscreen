<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Question;

//controlleur pour présenter le sondage
class SurveyController extends Controller
{
    public function index(Survey $survey) {

    	//affichage du sondage id = 1 sur la page d'accueil
    	$questions = Question::with('survey')->get();
    	$questionsCount = Question::with('survey')->count();

    	return view('front.survey.index', ['questions' => $questions], ['questionsCount' => $questionsCount]);
    }

}
