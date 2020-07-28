<?php

Route::get('login', 'Auth\LoginController@index')->name('login.page');
Route::post('login', 'Auth\LoginController@login')->name('login');

Route::middleware('global')->group(function() {
    Route::get('/', function() {
        return redirect()->route('login.page');
    });

    Route::middleware('admin')->prefix('admin')->group(function() {
        Route::get('/', 'Admin\AdminController@index');
    });
    
    Route::middleware('teacher')->prefix('teacher')->group(function() {
        Route::get('/', 'Teacher\TeacherController@index');
    });
    
    Route::middleware('student')->prefix('student')->group(function() {
        Route::get('/', 'Student\StudentController@index');
    });
});

