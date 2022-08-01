<?php

use Illuminate\Support\Facades\Route;

//--------frontend Route--------------------
Route::get('/',[\App\Http\Controllers\index::class,'home'])->name('home');
//-----------Student route ----------------------------------------

Route::get('/student/login', [\App\Http\Controllers\student::class,'student_res_view'])->name('login_res');
Route::post('/student/login', [\App\Http\Controllers\student::class,'student__res_login'])->name('res_log');

Route::get('student/otp/confirm/{phone}', [\App\Http\Controllers\student::class,'otp_confirm_view'])->name('otp');
Route::post('student/otp/confirm/{phone}', [\App\Http\Controllers\student::class,'otp_confirm'])->name('otp.confirm');

Route::get('student/info',[\App\Http\Controllers\student::class,'student_detiles'])->name('student_info');
Route::post('submit/student/info',[\App\Http\Controllers\student::class,'submit_student_info'])->name('student_submit_info');
Route::get('student/dashboard',[\App\Http\Controllers\student::class,'student_dashboard'])->name('student_dashboard');
Route::get('my/course',[\App\Http\Controllers\student::class,'my_course'])->name('my_course');

//-----------End Student route --------------------------------------
//-----------Teacher route --------------------------------------

Route::get('/teacher/login', [\App\Http\Controllers\teacher::class,'teacher_login_view'])->name('teacher_login');
Route::post('/teacher/login', [\App\Http\Controllers\teacher::class,'teacher_login'])->name('teacher_login_submit');

Route::get('teacher/otp/confirm/{phone}', [\App\Http\Controllers\teacher::class,'otp_confirm_view'])->name('teacher.otp');
Route::post('teacher/otp/confirm/{phone}', [\App\Http\Controllers\teacher::class,'teacher_otp_confirm'])->name('teacher.otp.confirm');

Route::get('/teacher/info',[\App\Http\Controllers\teacher::class,'teacher_detiles'])->name('teacher_info');
Route::post('submit/teacher/info',[\App\Http\Controllers\teacher::class,'teacher_submit_info'])->name('teacher_submit_info');
Route::get('teacher/dashboard',[\App\Http\Controllers\teacher::class,'teacher_dashboard'])->name('teacher_dashboard');
Route::get('add/course',[\App\Http\Controllers\teacher::class,'add_course_view'])->name('add_course');
Route::post('add/course',[\App\Http\Controllers\teacher::class,'submit_course'])->name('submit_course');
Route::get('all/course',[\App\Http\Controllers\teacher::class,'all_course'])->name('all_course');
Route::get('add/topic',[\App\Http\Controllers\teacher::class,'view_add_topic'])->name('view_add_topic');
Route::post('add/topic/',[\App\Http\Controllers\teacher::class,'add_topic'])->name('add_topic');
Route::get('edit/course',[\App\Http\Controllers\teacher::class,'edit_course'])->name('edit_course');

Route::get('course/{course_id}',[\App\Http\Controllers\teacher::class,'single_course'])->name('single_course');
Route::post('add/class/{course_id}/{topic_id}',[\App\Http\Controllers\teacher::class,'add_class'])->name('add_class');

Route::post('course/{course_id}',[\App\Http\Controllers\teacher::class,'add_single_course_topic'])->name('single_course_topic');
Route::get('delete/class/{course_id}/{topic_id}/{content_id}',[\App\Http\Controllers\teacher::class,'delete_class'])->name('delete_class');





//---------------admin route -------------------------------
Route::get('admin',[\App\Http\Controllers\admin::class,'admin_view'])->name('admin');
Route::get('logout',[\App\Http\Controllers\index::class,'logout'])->name('logout');



//Manager route

Route::get('manager',[\App\Http\Controllers\manager::class,'manager_dash'] )->name('manager_dash');
Route::get('add/teacher',[\App\Http\Controllers\manager::class,'add_teacher'] )->name('add_teacher');
Route::get('all/teacher',[\App\Http\Controllers\manager::class,'all_teacher'])->name('all_teacher');
Route::post('submit_teacher',[\App\Http\Controllers\manager::class,'submit_teacher'])->name('submit_teacher');
