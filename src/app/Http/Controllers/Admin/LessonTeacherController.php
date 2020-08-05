<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonTeacherController extends Controller
{
    public function index() {
        return view('admin.lessons_calendar.teacher');
    }
}
