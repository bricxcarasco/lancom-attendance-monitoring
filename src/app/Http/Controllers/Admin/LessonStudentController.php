<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonStudentController extends Controller
{
    public function index() {
        return view('admin.lessons_calendar.student');
    }
}
