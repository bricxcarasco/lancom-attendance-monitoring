<?php

Route::get('login', 'Auth\LoginController@index')->name('login.page');
Route::post('login', 'Auth\LoginController@login')->name('login.auth');
Route::post('logout', 'Auth\LoginController@logout')->name('logout.auth');

Route::middleware('global')->group(function() {
    Route::get('/', 'Auth\LoginController@index');

    Route::middleware('admin')->prefix('admin')->group(function() {
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
        Route::prefix('lessons_calendar')->group(function() {
            Route::get('/teacher', 'Admin\LessonTeacherController@index')->name('admin.lessons_calendar.teacher.index');
            Route::get('/student', 'Admin\LessonStudentController@index')->name('admin.lessons_calendar.student.index');
        });
        Route::prefix('users')->group(function() {
            Route::get('/administrator', 'Admin\UserAdministratorController@index')->name('admin.users.administrator.index');
            Route::post('/administrator', 'Admin\UserAdministratorController@add')->name('admin.users.administrator.add');
            Route::patch('/administrator/enable', 'Admin\UserAdministratorController@enable')->name('admin.users.administrator.enable');
            Route::patch('/administrator/disable', 'Admin\UserAdministratorController@disable')->name('admin.users.administrator.disable');

            Route::get('/teacher', 'Admin\UserTeacherController@index')->name('admin.users.teacher.index');
            Route::get('/student', 'Admin\UserStudentController@index')->name('admin.users.student.index');
        });
        Route::prefix('salary')->group(function() {
            Route::get('/', 'Admin\SalaryManagementController@index')->name('admin.salary.index');
        });
    });
    
    Route::middleware('teacher')->prefix('teacher')->group(function() {
        Route::get('/', 'Teacher\TeacherController@index')->name('teacher.dashboard');
    });
    
    Route::middleware('student')->prefix('student')->group(function() {
        Route::get('/', 'Student\StudentController@index')->name('student.dashboard');
    });
});

