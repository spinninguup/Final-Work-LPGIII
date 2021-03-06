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


########################## Resources ##################
Route::resource('course', 'CourseController');

Route::resource('user', 'CourseController');

Route::resource('student', 'StudentController');

########################## GET  ######################

Route::get('/validar/{id}/updateAdmin', 'StudentController@updateAdmin');

Route::get('/validar/{id}/updateUser', 'StudentController@updateUser');

Route::get('/exclusao/{id}/del', 'StudentController@destroy');

Route::get('/exclusaoC/{id}/del', 'CourseController@destroy');

Route::get('/enroll/{id}', 'EnrollmentController@List');

Route::get('/validar/{id}/matricula', 'EnrollmentController@validate');

Route::get('/subscription', 'EnrollmentController@index');

Route::get('/enroll/{id}/admin', 'EnrollmentController@list2');

Route::get('/enrollStudent/{idStudent}/{idC}', 'EnrollmentController@list3');

Route::get('/enrollAuthorized/{idU}/{idC}', 'EnrollmentController@authorized');

Route::get('/enrollDel/{idU}/{idC}', 'EnrollmentController@destroy');

Route::get('/enroll', 'EnrollmentController@index');

Route::get('/course/{id}/edit', 'CourseController@edit');

Route::get('/home', 'HomeController@index')->name('home');

#################### View ##########################

Route::view('/admin/student/index', 'student.index');


Auth::routes();


