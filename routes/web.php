<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@landing');
Route::get('/about', 'PageController@about');

// Major asssessment
Route::get('/major-assessment/1', 'AssessmentController@majorAssessment1');
Route::get('/major-assessment/2', 'AssessmentController@majorAssessment2');
Route::get('/major-assessment/3', 'AssessmentController@majorAssessment3');
Route::get('/major-assessment-result', 'AssessmentController@viewMajorResult');

// Career asssessment
Route::get('/career-assessment', 'AssessmentController@careerAssessment');
Route::get('/career-assessment-result', 'AssessmentController@viewCareerResult');

// Careers
Route::get('/careers', 'CareerController@showAll');
Route::get('/career/{id}', 'CareerController@show');

//Majors
Route::get('/majors', 'MajorController@showAll');
Route::get('/major/{id}', 'MajorController@show');

//Tes riasec
Route::get('/test', function () {
    return view('riasec');
});

Route::get('/riasec-assessment', 'AssessmentController@view_riasec_assessment_page');

Route::post('/get-riasec-data','AssessmentController@get_risec_result');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
