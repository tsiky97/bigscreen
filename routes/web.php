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

Route::get('/', 'SurveyController@index');
Route::resource("answer", "AnswerController");
Route::get('/answer/user/{userId}', 'AnswerController@show')->name('answer.show');;

Auth::routes();
Route::resource('administration', 'BackupController')->middleware('auth');
