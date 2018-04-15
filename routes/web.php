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
    Route::resource('/subject', 'SubjectController');
    Route::resource('/teacher', 'TeacherController');
    Route::resource('/mark', 'MarkController');
    Route::resource('/attendenc', 'AttendencController');
    Route::resource('/exam', 'ExamController');

});
Route::resource('/admission', 'AdmissionController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
