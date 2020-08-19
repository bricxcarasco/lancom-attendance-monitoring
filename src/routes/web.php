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
            Route::get('/teacher/{date}', 'Admin\LessonTeacherController@searchScheduleWithDate')->name('admin.lessons_calendar.teacher.search_date');
            Route::get('/teacher/lesson/{id}', 'Admin\LessonTeacherController@searchLesson')->name('admin.lessons_calendar.teacher.lesson');
            Route::get('/teacher/schedule/{id}', 'Admin\LessonTeacherController@searchSchedule')->name('admin.lessons_calendar.teacher.schedule');
            Route::get('/student', 'Admin\LessonStudentController@index')->name('admin.lessons_calendar.student.index');
        });
        Route::prefix('users')->group(function() {
            Route::get('/administrator', 'Admin\UserAdministratorController@index')->name('admin.users.administrator.index');
            Route::get('/administrator/{id}', 'Admin\UserAdministratorController@getUser')->name('admin.users.administrator.get_user');
            Route::post('/administrator', 'Admin\UserAdministratorController@add')->name('admin.users.administrator.add');
            Route::put('/administrator', 'Admin\UserAdministratorController@edit')->name('admin.users.administrator.edit');
            Route::put('/administrator/change_password', 'Admin\UserAdministratorController@changePassword')->name('admin.users.administrator.change_password');
            Route::delete('/administrator', 'Admin\UserAdministratorController@delete')->name('admin.users.administrator.delete');
            Route::patch('/administrator/enable', 'Admin\UserAdministratorController@enable')->name('admin.users.administrator.enable');
            Route::patch('/administrator/disable', 'Admin\UserAdministratorController@disable')->name('admin.users.administrator.disable');

            Route::get('/teacher', 'Admin\UserTeacherController@index')->name('admin.users.teacher.index');
            Route::get('/teacher/{id}', 'Admin\UserTeacherController@getUser')->name('admin.users.teacher.get_user');
            Route::post('/teacher', 'Admin\UserTeacherController@add')->name('admin.users.teacher.add');
            Route::put('/teacher', 'Admin\UserTeacherController@edit')->name('admin.users.teacher.edit');
            Route::put('/teacher/change_password', 'Admin\UserTeacherController@changePassword')->name('admin.users.teacher.change_password');
            Route::delete('/teacher', 'Admin\UserTeacherController@delete')->name('admin.users.teacher.delete');
            Route::patch('/teacher/enable', 'Admin\UserTeacherController@enable')->name('admin.users.teacher.enable');
            Route::patch('/teacher/disable', 'Admin\UserTeacherController@disable')->name('admin.users.teacher.disable');

            Route::get('/student', 'Admin\UserStudentController@index')->name('admin.users.student.index');
            Route::get('/student/{id}', 'Admin\UserStudentController@getUser')->name('admin.users.student.get_user');
            Route::post('/student', 'Admin\UserStudentController@add')->name('admin.users.student.add');
            Route::put('/student', 'Admin\UserStudentController@edit')->name('admin.users.student.edit');
            Route::put('/student/change_password', 'Admin\UserStudentController@changePassword')->name('admin.users.student.change_password');
            Route::delete('/student', 'Admin\UserStudentController@delete')->name('admin.users.student.delete');
            Route::patch('/student/enable', 'Admin\UserStudentController@enable')->name('admin.users.student.enable');
            Route::patch('/student/disable', 'Admin\UserStudentController@disable')->name('admin.users.student.disable');
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

