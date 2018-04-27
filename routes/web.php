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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>'auth'],function(){

    Route::resource('/info', 'RegistrationController');
    Route::post('/info/search/', 'RegistrationController@search');
    Route::resource('/subject', 'SubjectController');
    Route::resource('/teacher', 'TeacherController');
    Route::resource('/mark', 'MarkController');
    Route::get('/mark/new/{id}', 'MarkController@marks');
    Route::get('/marksheet/{sid?}/{examid?}/{year?}', 'MarkController@marksheet');
    Route::resource('/attendenc', 'AttendencController');
    Route::resource('/exam', 'ExamController');
    Route::resource('/class', 'ClassController');

});
Route::resource('/admission', 'AdmissionController');
Route::get('/admission/approve/{id}', 'AdmissionController@approval');
Route::get('/approve', 'AdmissionController@approve');




Auth::routes();

Route::get('/content', 'ContentController@index')->name('content');
Route::get('/home', 'HomeController@index')->name('home');


