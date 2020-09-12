<?php

namespace App\Http\Controllers\Teacher;

use App\Helpers\Constant;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Schedule;
use App\ScheduleGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $schedule = Schedule::find($id);
        return $schedule->schedule_group;
    }

    public function addSchedule(Request $request)
    {
        $user = Auth::user();
        $leave_days_list = Constant::LEAVE_DAYS_LIST[$request->category];
        $save_schedule_group = ScheduleGroup::create([
            'user_id' => $user->id, 
            'schedule_date' => $request->date, 
            'schedule_category' => $request->category, 
            'status' => $request->status, 
            'reason' => $request->reason
        ]);

        if ($save_schedule_group) {
            foreach($leave_days_list as $time) {
                if (!Schedule::checkTeacherScheduleIfExists($user->id, $request->date, $time)) {
                    Schedule::create([
                        'user_id' => $user->id, 
                        'schedule_group_id' => $save_schedule_group->id, 
                        'schedule_datetime' => $request->date. " " .$time, 
                        'schedule_date' => $request->date, 
                        'schedule_time' => $time, 
                        'status' => $request->status, 
                        'reason' => $request->reason
                    ]);
                }
            }
            return redirect()->back()->with('success', Constant::SCHEDULE_ADDED);
        } else {
            return redirect()->back()->with('error', Constant::ERROR_SERVER);
        }
    }

    public function updateSchedule(Request $request)
    {
        $user = Auth::user();
        $leave_days_list = Constant::LEAVE_DAYS_LIST[$request->category];
        $schedule_group = ScheduleGroup::find($request->id);

        try {
            $save_schedule_group = ScheduleGroup::where('id', $request->id)->update([
                'schedule_category' => $request->category,
                'status' => $request->status,
                'reason' => $request->reason
            ]);

            if ($schedule_group->schedule_category != $request->category) {
                $schedule_group->schedules()->delete();
                if ($save_schedule_group) {
                    foreach($leave_days_list as $time) {
                        Schedule::create([
                            'user_id' => $user->id, 
                            'schedule_group_id' => $schedule_group->id, 
                            'schedule_datetime' => $request->date. " " .$time, 
                            'schedule_date' => $request->date, 
                            'schedule_time' => $time, 
                            'status' => $request->status, 
                            'reason' => $request->reason
                        ]);
                    }
                }
            } else {
                if ($save_schedule_group) {
                    $schedule_group->schedules()->update([
                        'status' => $request->status,
                        'reason' => $request->reason
                    ]);
                }
            }
            return redirect()->back()->with('success', Constant::SCHEDULE_UPDATED);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->back()->with('error', Constant::ERROR_SERVER);
        }   
    }
}
