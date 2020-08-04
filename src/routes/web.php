<?php

Route::get('login', 'Auth\LoginController@index')->name('login.page');
Route::post('login', 'Auth\LoginController@login')->name('login.auth');
Route::post('logout', 'Auth\LoginController@logout')->name('logout.auth');

Route::middleware('global')->group(function() {
    Route::get('/', function() {
        return view('login.page');
    });

    Route::middleware('admin')->prefix('admin')->group(function() {
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    });
    
    Route::middleware('teacher')->prefix('teacher')->group(function() {
        Route::get('/', 'Teacher\TeacherController@index')->name('teacher.dashboard');
    });
    
    Route::middleware('student')->prefix('student')->group(function() {
        Route::get('/', 'Student\StudentController@index')->name('student.dashboard');
    });
});

