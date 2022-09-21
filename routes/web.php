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

//Login Route
Route::get('/', 'LoginController@index');
Route::post('/login-process', 'LoginController@login_process');
Route::get('/logout', 'LoginController@logout');

//Admin Route
Route::get('admin/home', 'AdminController@home');
Route::get('admin/sy_bed', 'AdminController@sy_bed');
Route::get('admin/bed', 'AdminController@bed');
Route::get('admin/college', 'AdminController@college');
Route::get('admin/view_college', 'AdminController@view_college');
Route::get('admin/form_shifter', 'AdminController@form_shifter');
Route::get('admin/individual_form', 'AdminController@individual_form');
Route::get('admin/individual_form_bed', 'AdminController@individual_form_bed');
Route::get('admin/guidance_form', 'AdminController@guidance_form');
Route::post('admin/update_student', 'AdminController@update_student');
Route::post('admin/delete_student', 'AdminController@delete_student');
Route::get('admin/add_bed', 'AdminController@add_bed');
Route::post('admin/add_student_bed', 'AdminController@add_student_bed');
Route::post('admin/update_student_c', 'AdminController@update_student_c');
Route::post('admin/delete_student_c', 'AdminController@delete_student_c');
Route::get('admin/add_college', 'AdminController@add_college');
Route::post('admin/add_student_college', 'AdminController@add_student_college');
Route::post('admin/update_student_college', 'AdminController@update_student_college');
Route::get('admin/add_sy_college', 'AdminController@add_sy_college');
Route::post('admin/add_sy_bed_process', 'AdminController@add_sy_bed_process');
Route::post('admin/add_sy_process', 'AdminController@add_sy_process');
Route::get('admin/add_sy', 'AdminController@add_sy');
Route::get('admin/grade', 'AdminController@grade');
Route::post('admin/add_grade', 'AdminController@add_grade');
Route::get('admin/section', 'AdminController@section');
Route::post('admin/add_section', 'AdminController@add_section');
Route::get('admin/department', 'AdminController@department');
Route::post('admin/add_department', 'AdminController@add_department');
Route::get('admin/course', 'AdminController@course');
Route::post('admin/add_course', 'AdminController@add_course');
Route::get('admin/year', 'AdminController@year');
Route::post('admin/add_year', 'AdminController@add_year');
Route::get('admin/strand', 'AdminController@strand');
Route::post('admin/add_strand', 'AdminController@add_strand');
Route::post('admin/individual_form_process', 'AdminController@individual_form_process');
Route::post('admin/current_period', 'AdminController@current_period');


//User Route
Route::get('user/home', 'UserController@home');
Route::get('user/form_shifter', 'UserController@form_shifter');
Route::get('/logout', 'AdminController@logout');

//Student Route
Route::get('student/home', 'StudentController@home');
Route::get('student/form_shifter', 'StudentController@form_shifter');
Route::get('student/reg_form', 'StudentController@reg_form');
Route::get('student/ext_form', 'StudentController@ext_form');
Route::get('/logout', 'AdminController@logout');

