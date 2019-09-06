<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use App\Choice;
use App\Charts\SampleChart;
use Charts;
use DB;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $choiceOne6 = Answer::where('answer', 'Occulus Rift/s')->count();
        $choiceTwo6 = Answer::where('answer', 'HTC Vive')->count();
        $choiceThree6 = Answer::where('answer', 'Windows Mixed Reality')->count();
        $choiceFour6 = Answer::where('answer', 'PSVR')->count();

        $choiceOne7 = Answer::where('answer', 'SteamVR')->count();
        $choiceTwo7 = Answer::where('answer', 'Occulus store')->count();
        $choiceThree7 = Answer::where('answer', 'Viveport')->count();
        $choiceFour7 = Answer::where('answer', 'Playstation VR')->count();
        $choiceFive7 = Answer::where('answer', 'Google Play')->count();
        $choiceSix7 = Answer::where('answer', 'Windows store')->count();

        $choiceOne8 = Answer::where('answer', 'Occulus Quest')->count();
        $choiceTwo8 = Answer::where('answer', 'Occulus Go')->count();
        $choiceThree8 = Answer::where('answer', 'HTC Vive Pro')->count();
        $choiceFour8 = Answer::where('answer', 'Autre')->count();
        $choiceFive8 = Answer::where('answer', 'Aucun')->count();

        $OneQuestion11 = Answer::where('question_id', '11')->where('answer', '1')->count();
        $TwoQuestion11 = Answer::where('question_id', '11')->where('answer', '2')->count();
        $ThreeQuestion11 = Answer::where('question_id', '11')->where('answer', '3')->count();
        $FourQuestion11 = Answer::where('question_id', '11')->where('answer', '4')->count();
        $FiveQuestion11 = Answer::where('question_id', '11')->where('answer', '5')->count();

        $OneQuestion12 = Answer::where('question_id', '12')->where('answer', '1')->count();
        $TwoQuestion12 = Answer::where('question_id', '12')->where('answer', '2')->count();
        $ThreeQuestion12 = Answer::where('question_id', '12')->where('answer', '3')->count();
        $FourQuestion12 = Answer::where('question_id', '12')->where('answer', '4')->count();
        $FiveQuestion12 = Answer::where('question_id', '12')->where('answer', '5')->count();

        $OneQuestion13 = Answer::where('question_id', '13')->where('answer', '1')->count();
        $TwoQuestion13 = Answer::where('question_id', '13')->where('answer', '2')->count();
        $ThreeQuestion13 = Answer::where('question_id', '13')->where('answer', '3')->count();
        $FourQuestion13 = Answer::where('question_id', '13')->where('answer', '4')->count();
        $FiveQuestion13 = Answer::where('question_id', '13')->where('answer', '5')->count();

        $OneQuestion14 = Answer::where('question_id', '14')->where('answer', '1')->count();
        $TwoQuestion14 = Answer::where('question_id', '14')->where('answer', '2')->count();
        $ThreeQuestion14 = Answer::where('question_id', '14')->where('answer', '3')->count();
        $FourQuestion14 = Answer::where('question_id', '14')->where('answer', '4')->count();
        $FiveQuestion14 = Answer::where('question_id', '14')->where('answer', '5')->count();

        $OneQuestion15 = Answer::where('question_id', '15')->where('answer', '1')->count();
        $TwoQuestion15 = Answer::where('question_id', '15')->where('answer', '2')->count();
        $ThreeQuestion15 = Answer::where('question_id', '15')->where('answer', '3')->count();
        $FourQuestion15 = Answer::where('question_id', '15')->where('answer', '4')->count();
        $FiveQuestion15 = Answer::where('question_id', '15')->where('answer', '5')->count();

        $chartjs6 = app()->chartjs
                    ->name('Question6')
                    ->type('pie')
                    ->size(['width' => 200, 'height' => 200])
                    ->labels(['Occulus Rift/s', 'HTC Vive', 'Windows Mixed Reality', 'PSVR'])
                    ->datasets([
                        [
                            'backgroundColor' => ['#BAC1ED', '#FFD19A', '#FFA785', '#F9C0F3'],
                            'hoverBackgroundColor' => ['#BAC1ED', '#FFD19A', '#FFA785', '#F9C0F3'],
                            'data' => [$choiceOne6, $choiceTwo6, $choiceThree6, $choiceFour6]
                        ]
                    ])
                    ->options([
                        'title' => [
                            'display' => true,
                            'text' => 'Question 6'
                        ],
                    ]);

        $chartjs7 = app()->chartjs
                    ->name('Question7')
                    ->type('pie')
                    ->size(['width' => 200, 'height' => 200])
                    ->labels(['SteamVR', 'Occulus store', 'Viveport', 'Playstation VR', 'Google Play', 'Windows store'])
                    ->datasets([
                        [
                            'backgroundColor' => ['#FFCC63', '#6DD9BF', '#50A18E', '#F2D680', '#F2916D', '#F26E50'],
                            'hoverBackgroundColor' => ['#FFCC63', '#6DD9BF', '#50A18E', '#F2D680', '#F2916D', '#F26E50'],
                            'data' => [$choiceOne7, $choiceTwo7, $choiceThree7, $choiceFour7, $choiceFive7, $choiceSix7]
                        ]
                    ])
                    ->options([
                        'title' => [
                            'display' => true,
                            'text' => 'Question 7'
                        ],
                    ]);

        $chartjs8 = app()->chartjs
                    ->name('Question8')
                    ->type('pie')
                    ->size(['width' => 200, 'height' => 200])
                    ->labels(['Occulus Quest', 'Occulus Go', 'HTC Vive Pro', 'Autre', 'Aucun'])
                    ->datasets([
                        [
                            'backgroundColor' => ['#8B5A8C', '#ADB0D9', '#F2DC9B', '#F2A35E', '#F25C5C'],
                            'hoverBackgroundColor' => ['#8B5A8C', '#ADB0D9', '#F2DC9B', '#F2A35E', '#F25C5C'],
                            'data' => [$choiceOne8, $choiceTwo8, $choiceThree8, $choiceFour8, $choiceFive8]
                        ]
                    ])
                    ->options([
                        'title' => [
                            'display' => true,
                            'text' => 'Question 8'
                        ],
                    ]);

        $chartjs115 = app()->chartjs
                    ->name('Question115')
                    ->type('radar')
                    ->size(['width' => 200, 'height' => 200])
                    ->labels(['Question 11', 'Question 12', 'Question 13', 'Question 14', 'Question 15'])
                    ->datasets([
                        [
                            "label" => "1",
                            'backgroundColor' => "rgb(255,108,139,0.51)",
                            'fill' => 'undefined',
                            'data' => [$OneQuestion11, $OneQuestion12, $OneQuestion13, $OneQuestion14, $OneQuestion15],
                        ],
                        [
                            "label" => "2",
                            'backgroundColor' => "rgb(255,159,64,0.51)",
                            'fill' => '-1',
                            'data' => [$TwoQuestion11, $TwoQuestion12, $TwoQuestion13, $TwoQuestion14, $TwoQuestion15],
                        ],
                        [
                            "label" => "3",
                            'backgroundColor' => "rgb(255,205,86,0.51)",
                            'fill' => '1',
                            'data' => [$ThreeQuestion11, $ThreeQuestion12, $ThreeQuestion13, $ThreeQuestion14, $ThreeQuestion15],
                        ],
                        [
                            "label" => "4",
                            'backgroundColor' => "rgb(54,162,235,0.51)",
                            'fill' => 'false',
                            'data' => [$FourQuestion11, $FourQuestion12, $FourQuestion13, $FourQuestion14, $FourQuestion15],
                        ],
                        [
                            "label" => "5",
                            'backgroundColor' => "rgba(153,102,255, 0.51)",
                            'fill' => '-1',
                            'data' => [$FiveQuestion11, $FiveQuestion12, $FiveQuestion13, $FiveQuestion14, $FiveQuestion15],
                        ],
                    ])
                    ->options([
                        'title' => [
                            'display' => true,
                            'text' => 'Question 11 à 15'
                        ],
                    ]);

        return view('back.index', compact('chartjs6', 'chartjs7', 'chartjs8', 'chartjs115'));

    }

    public function showQuestions() {

        $questions = Question::all();

        return view('back.questions', ['questions' => $questions]);
    }

    public function showAnswers() {

        $groupsAnswers = Answer::with('question')->get()->groupBy('userId');

        return view('back.answers', ['groupsAnswers' => $groupsAnswers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
