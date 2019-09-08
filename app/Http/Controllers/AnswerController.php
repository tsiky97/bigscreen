<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Answer;
use Webpatser\Uuid\Uuid;

//controleur pour les réponses
class AnswerController extends Controller
{

	//enregistrement des réponses dans la table Answer
    public function store(Request $request) {

	    // remove the token
	    $arr = $request->except('_token');

	    $randomText = Uuid::generate()->string;

	    foreach ($arr as $key => $value) {

	    	$newAnswer = new Answer();
	      	$newValue = $value['answer'];
		    $newAnswer->answer = $newValue;
		    $newAnswer->question_id = $key;
		    $newAnswer->userId = $randomText;
		    $newAnswer->survey_id = '1';

	      	$newAnswer->save();

	      	$answerArray[] = $newAnswer;
	    };

	    //redirection qui affiche un message contenant le lien pour voir ses réponses
    	return redirect()->route('front.answer.index')->with( [ 'randomText' => $randomText ] );

	}

	public function index(Survey $survey) {

		$survey->load('questions.answers');

	    return view('front.answer.index', compact('survey'));

  	}

  	//fonction qui permet d'afficher les réponses d'un utilisateur
  	public function show(string $userId) {
		
		$answers = Answer::with('question')->where('userId', $userId)->get();
  		$answersCount = Answer::with('question')->where('userId', $userId)->count();

  		return view('front.answer.show', ['answers' => $answers]);

  	}

}