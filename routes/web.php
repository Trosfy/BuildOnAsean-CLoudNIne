<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/search', 'PageController@search');
Route::get('/dashboard', 'PageController@dashboard');

// Major asssessment
Route::get('/major-assessment', 'AssessmentController@majorAssessment');
Route::get('/major-assessment/1', 'AssessmentController@majorAssessment1');
Route::get('/major-assessment/2', 'AssessmentController@majorAssessment2');
Route::get('/major-assessment/3', 'AssessmentController@majorAssessment3');
Route::get('/major-assessment-result', 'AssessmentController@viewMajorResult');

// Save assessment results
Route::post('/major-assessment/1', 'AssessmentController@majorAssessment1save');
Route::post('/major-assessment/2', 'AssessmentController@majorAssessment2save');
Route::post('/major-assessment/3', 'AssessmentController@majorAssessment3save');

// Career asssessment
Route::get('/career-assessment', 'AssessmentController@careerAssessment');
Route::get('/career-assessment-q', 'AssessmentController@careerAssessmentQ');
Route::get('/career-assessment-result', 'AssessmentController@viewCareerResult');
Route::post('career-assessment-q', 'AssessmentController@careerAssessmentSave'); 

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

Route::get('/confirm', function(){
    return view('auth.passwords.confirm');
});
Route::get('/reset', function(){
    return view('auth.passwords.reset');
});
