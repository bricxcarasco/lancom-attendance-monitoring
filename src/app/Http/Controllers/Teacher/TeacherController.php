<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TeacherController extends Controller
{
    public function index() {
        $date = Carbon::now()->format('Y-m-d');
        $weeklyData = CalendarController::getTeacherWeekList($date);
        return view('teacher.dashboard', compact('weeklyData'));
    }

    public function profile() {
        return view('teacher.profile');
    }

    public function salary() {
        return view('teacher.salary');
    }

    public function searchScheduleWithDate(Request $request, $date)
    {
        $weeklyData = CalendarController::getTeacherWeekList($date);
        return view('teacher.dashboard', compact('weeklyData'));
    }

    public function searchLesson($id)
    {
        return Lesson::find($id);
    }

    public function searchSchedule($id)
    {
        return Schedule::find($id);
    }
}
