<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Question;
use App\Answer;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;

//controleur pour les réponses
class AnswerController extends Controller
{

	//enregistrement des réponses dans la table Answer
    public function store(Request $request) {

    	//pour ne pas le prendre en compte lors de la validation des données
    	$request->offsetUnset('_token');

	    $this->validate($request, [
    		'*.answer' => 'required',
    		'1.answer' => 'required|email'
        ]);

        // pour ne pas le prendre en compte lors de l'enregistrement des données
	    $removeToken = $request->except('_token');

	    $randomText = Uuid::generate()->string;

	    foreach ($removeToken as $key => $value) {

	    	$newAnswer = new Answer();
	      	$newValue = $value['answer'];
		    $newAnswer->answer = $newValue;
		    $newAnswer->question_id = $key;
		    $newAnswer->userId = $randomText;
		    $newAnswer->survey_id = Survey::with('questions')->pluck('id')->first();
		    $newAnswer->created_at = Carbon::now(new \DateTimeZone('Europe/Paris'));

	      	$newAnswer->save();

	      	$answerArray[] = $newAnswer;
	    };

	    //redirection qui affiche un message contenant le lien pour voir ses réponses
    	return redirect()->route('front.answer.index')->with( [ 'randomText' => $randomText ]);

	}

	public function index(Survey $survey) {

		$survey->load('questions.answers');

	    return view('front.answer.index', compact('survey'));

  	}

  	//fonction qui permet d'afficher les réponses d'un utilisateur
  	public function show(string $userId) {
		
		$answers = Answer::with('question')->where('userId', $userId)->get();
  		$answersCount = Answer::with('question')->where('userId', $userId)->count();
  		$answerTime = Answer::with('question')->where('userId', $userId)->pluck('created_at')->first();
		$displayTime = Carbon::parse($answerTime)->isoFormat('DD.MM.YYYY à H:mm');

  		return view('front.answer.show', ['answers' => $answers], ['displayTime' => $displayTime]);

  	}

}