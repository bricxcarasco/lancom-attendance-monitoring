<?php

namespace App\Http\Controllers\Student;

use App\Activity;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index() 
    {
        $date = Carbon::now()->format('Y-m-d');
        $weeklyData = CalendarController::getStudentWeekList($date, Auth::user()->id);
        return view('student.dashboard', compact('weeklyData'));
    }

    public function profile() {
        $user = Auth::user();
        $activities = Activity::getActivities($user->id);
        return view('student.profile', compact('user', 'activities'));
    }

    public function searchLessonWithDate(Request $request, $date)
    {
        $weeklyData = CalendarController::getStudentWeekList($date, Auth::user()->id);
        return view('student.dashboard', compact('weeklyData'));
    }

    public function searchLesson($id)
    {
        return Lesson::find($id);
    }
}
