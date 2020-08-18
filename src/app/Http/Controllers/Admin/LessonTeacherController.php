<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LessonTeacherController extends Controller
{
    public function index() 
    {
        $date = Carbon::now()->format('Y-m-d');
        $weeklyData = CalendarController::getWeekList($date);
        return view('admin.lessons_calendar.teacher', compact('weeklyData'));
    }

    public function searchScheduleWithDate(Request $request, $date)
    {
        $weeklyData = CalendarController::getWeekList($date);
        return view('admin.lessons_calendar.teacher', compact('weeklyData'));
    }
}
