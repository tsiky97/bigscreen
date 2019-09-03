<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Answer;
use Webpatser\Uuid\Uuid;

class AnswerController extends Controller
{

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

    	return "Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille. Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: <a href='http://localhost:8000/answer/user/".$randomText."'>http://localhost:8000/answer/user/".$randomText."</a>";
	}

	public function index(Survey $survey) {

		$survey->load('questions.answers');

	    return view('answer.index', compact('survey'));

  	}


  	public function show(string $userId) {

  		//$survey->load('questions.answers');

  		$answers = Answer::with('question')->where('userId', $userId)->get();
  		$answersCount = Answer::with('question')->where('userId', $userId)->count();

  		return view('answer.show', ['answers' => $answers]);

  	}

}