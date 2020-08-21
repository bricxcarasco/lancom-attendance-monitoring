<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LessonStudentController extends Controller
{
    public function index() 
    {
        $date = Carbon::now()->format('Y-m-d');
        $weeklyData = CalendarController::getStudentWeekList($date);
        return view('admin.lessons_calendar.student', compact('weeklyData'));
    }

    public function searchLessonWithDate(Request $request, $date)
    {
        $weeklyData = CalendarController::getStudentWeekList($date);
        return view('admin.lessons_calendar.student', compact('weeklyData'));
    }

    public function searchLesson($id)
    {
        return Lesson::find($id);
    }
}
