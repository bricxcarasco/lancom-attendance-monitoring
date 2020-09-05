<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index() {
        $date = Carbon::now()->format('Y-m-d');
        $weeklyData = CalendarController::getTeacherWeekList($date, Auth::user()->id);
        return view('teacher.dashboard', compact('weeklyData'));
    }

    public function profile() {
        $user = Auth::user();
        return view('teacher.profile', compact('user'));
    }

    public function salary() {
        return view('teacher.salary');
    }

    public function searchScheduleWithDate(Request $request, $date)
    {
        $weeklyData = CalendarController::getTeacherWeekList($date, Auth::user()->id);
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

    public function addSchedule(Request $request)
    {
        $user = Auth::user();
        return [ $user, $request->all() ];
    }
}
