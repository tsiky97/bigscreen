<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//page d'accueil
Route::get('/', 'SurveyController@index');

Route::resource("answer", "AnswerController");

Route::get('/answer/user/{userId}', 'AnswerController@show')->name('front.answer.show');

Route::get('/form-send', 'AnswerController@index')->name('front.answer.index');

Auth::routes();

Route::get('administration/questions','BackupController@showQuestions')->name('administration.questions')->middleware('auth');

Route::get('administration/answers','BackupController@showAnswers')->name('administration.answers')->middleware('auth');

Route::resource('administration', 'BackupController')->middleware('auth');