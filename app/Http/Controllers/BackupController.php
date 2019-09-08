<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use App\Choice;
use App\Charts\SampleChart;
use Charts;
use DB;

//controlleur pour l'administration
class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        // 1) récupérer tous les choix de la question 6 (table choices)
        // 2) compter le nombre de chaque choix de la question 6 (table answers)
        // dans la table answers, je veux le nombre de chaque choix de la question 6
        // --> combien y a t il eu de choixe "occulus" de la question 6

        $valueQuestion6 = Choice::where('question_id', '6')->pluck('choice');
        $numberValue6 = Choice::where('question_id', '6')->count();
        $tabCount6 = [];

        for($i=0; $i < $numberValue6; $i++) {
            $tabCount6[$i] = Answer::where('answer', $valueQuestion6[$i])->count();
        }

        $valueQuestion7 = Choice::where('question_id', '7')->pluck('choice');
        $numberValue7 = Choice::where('question_id', '7')->count();
        $tabCount7 = [];

        for($i=0; $i < $numberValue7; $i++) {
            $tabCount7[$i] = Answer::where('answer', $valueQuestion7[$i])->count();
        }

        $valueQuestion8 = Choice::where('question_id', '8')->pluck('choice');
        $numberValue8 = Choice::where('question_id', '8')->count();
        $tabCount8 = [];

        for($i=0; $i < $numberValue8; $i++) {
            $tabCount8[$i] = Answer::where('answer', $valueQuestion8[$i])->count();
        }

        $tabCount11 = [];
        for($i=1; $i < 6; $i++) {
            $tabCount11[$i] = Answer::where('question_id', '11')->where('answer', $i)->count();
        }

        $tabCount12 = [];
        for($i=1; $i < 6; $i++) {
            $tabCount12[$i] = Answer::where('question_id', '12')->where('answer', $i)->count();
        }

        $tabCount13 = [];
        for($i=1; $i < 6; $i++) {
            $tabCount13[$i] = Answer::where('question_id', '13')->where('answer', $i)->count();
        }

        $tabCount14 = [];
        for($i=1; $i < 6; $i++) {
            $tabCount14[$i] = Answer::where('question_id', '14')->where('answer', $i)->count();
        }

        $tabCount15 = [];
        for($i=1; $i < 6; $i++) {
            $tabCount15[$i] = Answer::where('question_id', '15')->where('answer', $i)->count();
        }

        $chartjs6 = app()->chartjs
                    ->name('Question6')
                    ->type('pie')
                    ->size(['width' => 200, 'height' => 200])
                    ->labels(['Occulus Rift/s', 'HTC Vive', 'Windows Mixed Reality', 'PSVR'])
                    ->datasets([
                        [
                            'backgroundColor' => ['#BAC1ED', '#FFD19A', '#FFA785', '#F9C0F3'],
                            'hoverBackgroundColor' => ['#BAC1ED', '#FFD19A', '#FFA785', '#F9C0F3'],
                            'data' => [$tabCount6[0], $tabCount6[1], $tabCount6[2], $tabCount6[3]]
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
                            'data' => [$tabCount7[0], $tabCount7[1], $tabCount7[2], $tabCount7[3], $tabCount7[4], $tabCount7[5]]
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
                            'data' => [$tabCount8[0], $tabCount8[1], $tabCount8[2], $tabCount8[3], $tabCount8[4]]
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
                            'data' => [$tabCount11[1], $tabCount12[1], $tabCount13[1], $tabCount14[1], $tabCount15[1]]
                        ],
                        [
                            "label" => "2",
                            'backgroundColor' => "rgb(255,159,64,0.51)",
                            'fill' => '-1',
                            'data' => [$tabCount11[2], $tabCount12[2], $tabCount13[2], $tabCount14[2], $tabCount15[2]]
                        ],
                        [
                            "label" => "3",
                            'backgroundColor' => "rgb(255,205,86,0.51)",
                            'fill' => '1',
                            'data' => [$tabCount11[3], $tabCount12[3], $tabCount13[3], $tabCount14[3], $tabCount15[3]]
                        ],
                        [
                            "label" => "4",
                            'backgroundColor' => "rgb(54,162,235,0.51)",
                            'fill' => 'false',
                            'data' => [$tabCount11[4], $tabCount12[4], $tabCount13[4], $tabCount14[4], $tabCount15[4]]
                        ],
                        [
                            "label" => "5",
                            'backgroundColor' => "rgba(153,102,255, 0.51)",
                            'fill' => '-1',
                            'data' => [$tabCount11[5], $tabCount12[5], $tabCount13[5], $tabCount14[5], $tabCount15[5]]
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

    //fonction qui permet de montrer toutes les questions
    public function showQuestions() {

        $questions = Question::all();

        return view('back.questions', ['questions' => $questions]);
    }

    //fonction qui permet d'afficher les réponses par utilisateur
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
