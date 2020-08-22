<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StudentController extends Controller
{
    public function index() 
    {
        $date = Carbon::now()->format('Y-m-d');
        $weeklyData = CalendarController::getStudentWeekList($date);
        return view('student.dashboard', compact('weeklyData'));
    }

    public function profile() {
        return view('student.profile');
    }

    public function searchLessonWithDate(Request $request, $date)
    {
        $weeklyData = CalendarController::getStudentWeekList($date);
        return view('student.dashboard', compact('weeklyData'));
    }

    public function searchLesson($id)
    {
        return Lesson::find($id);
    }
}
