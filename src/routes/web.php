<?php

Route::get('/', function () {
    // return view('admin.dashboard');
    return view('login');
});

Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('/', 'Admin/AdminController@index');
});

Route::middleware('teacher')->prefix('teacher')->group(function() {
    Route::get('/', 'Teacher/TeacherController@index');
});

Route::middleware('student')->prefix('student')->group(function() {
    Route::get('/', 'Student/StudentController@index');
});
