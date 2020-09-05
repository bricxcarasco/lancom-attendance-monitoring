<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Classes\Week;
use App\Http\Controllers\Classes\Time;
use App\Helpers\Constant;
use App\Lesson;
use App\Schedule;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public static function getTeacherWeekList($date, $user_id = null)
    {
        $user = Auth::user();
        $carbonDate = Carbon::createFromFormat("Y-m-d", $date);
        $currentFirstDayOfWeek = Carbon::parse($carbonDate->startOfWeek())->format('Y-m-d');
        $currentEndDayOfWeek = Carbon::parse($carbonDate->endOfWeek())->format('Y-m-d');
        $weekRange = Carbon::parse($carbonDate->startOfWeek())->format('M d'). " - ".Carbon::parse($carbonDate->endOfWeek())->format('M d, Y');

        $period = CarbonPeriod::create($currentFirstDayOfWeek , $currentEndDayOfWeek);
        
        $weeklyData = [];
        $weeklyData['week_range'] = $weekRange;
        $weeklyData['week_dates'] = $period;
        $weeklyData['next_week_range'] = Carbon::parse(Carbon::createFromFormat("Y-m-d", $date)->startOfWeek()->addWeek())->format('Y-m-d');
        $weeklyData['prev_week_range'] = Carbon::parse(Carbon::createFromFormat("Y-m-d", $date)->startOfWeek()->subWeek())->format('Y-m-d');
        $weeklyData['ph_time_range'] = Constant::PH_TIME;
        $weeklyData['date_today'] = Carbon::now()->format('Y-m-d');
        foreach ($period as $date) {
            $date_class = 'disable_click_td';
            $week = new Week();
            $week->date = $date->format('Y-m-d');
            $week->day = $date->format('l');
            $week->day_number = Constant::DAYS_IN_NUMBER[$date->format('l')];
            $week->day_abbr = Constant::DAYS_ABBR[$date->format('l')];
            if ($user->user_type === Constant::USER_TYPE['ADMIN']) {
                $date_class = 'disable_admin';
            } else {
                if ($date->format('Y-m-d') > Carbon::now()->format('Y-m-d')) {
                    $date_class = 'enable_click_td';
                }
            }
            $week->date_class = $date_class;
            $weeklyData['week'][$date->format('Y-m-d')] = $week;
        }

        $timeData = [];
        foreach(Constant::PH_TIME AS $time) {
            $timeData[$time]['time'] = $time;
            foreach ($period as $date) {

                $schedules = Schedule::where('schedule_date', $date->format('Y-m-d'))->where('schedule_time', $time);
                $lessons = Lesson::where('schedule_date', $date->format('Y-m-d'))->where('schedule_time', $time);

                if ($user_id !== null) {
                    $schedules = $schedules->where('user_id', $user_id);
                   $lessons = $lessons->where('teacher_id', $user_id);
                }

                $schedules = $schedules->get();
                $lessons = $lessons->get();

                $merged_schedules_lessons = $schedules->merge($lessons);
                if (count($merged_schedules_lessons) > 0) {
                    $newTimeClass = new Time();
                    $newTimeClass->date = $date->format('Y-m-d');
                    $newTimeClass->ph_time = $time;
                    $newTimeClass->ja_time = Constant::JA_TIME[$time];
                    $newTimeClass->data = $merged_schedules_lessons;
                    $timeData[$time][$date->format('Y-m-d')] = $newTimeClass;
                }
            }
        }

        $weeklyData['time'] = $timeData;

        return $weeklyData;
    }

    public static function getStudentWeekList($date, $user_id = null)
    {
        $carbonDate = Carbon::createFromFormat("Y-m-d", $date);
        $currentFirstDayOfWeek = Carbon::parse($carbonDate->startOfWeek())->format('Y-m-d');
        $currentEndDayOfWeek = Carbon::parse($carbonDate->endOfWeek())->format('Y-m-d');
        $weekRange = Carbon::parse($carbonDate->startOfWeek())->format('M d'). " - ".Carbon::parse($carbonDate->endOfWeek())->format('M d, Y');

        $period = CarbonPeriod::create($currentFirstDayOfWeek , $currentEndDayOfWeek);
        
        $weeklyData = [];
        $weeklyData['week_range'] = $weekRange;
        $weeklyData['week_dates'] = $period;
        $weeklyData['next_week_range'] = Carbon::parse(Carbon::createFromFormat("Y-m-d", $date)->startOfWeek()->addWeek())->format('Y-m-d');
        $weeklyData['prev_week_range'] = Carbon::parse(Carbon::createFromFormat("Y-m-d", $date)->startOfWeek()->subWeek())->format('Y-m-d');
        $weeklyData['ph_time_range'] = Constant::PH_TIME;
        $weeklyData['date_today'] = Carbon::now()->format('Y-m-d');
        foreach ($period as $date) {
            $week = new Week();
            $week->date = $date->format('Y-m-d');
            $week->day = $date->format('l');
            $week->day_number = Constant::DAYS_IN_NUMBER[$date->format('l')];
            $week->day_abbr = Constant::DAYS_ABBR[$date->format('l')];
            $weeklyData['week'][$date->format('Y-m-d')] = $week;
        }

        $timeData = [];
        foreach(Constant::PH_TIME AS $time) {
            $timeData[$time]['time'] = $time;
            foreach ($period as $date) {

                $lessons = Lesson::where('schedule_date', $date->format('Y-m-d'))->where('schedule_time', $time);

                if ($user_id !== null)
                    $lessons = $lessons->where('student_id', $user_id);
                
                $lessons = $lessons->get();

                if (count($lessons) > 0) {
                    $newTimeClass = new Time();
                    $newTimeClass->date = $date->format('Y-m-d');
                    $newTimeClass->ph_time = $time;
                    $newTimeClass->ja_time = Constant::JA_TIME[$time];
                    $newTimeClass->data = $lessons;
                    $timeData[$time][$date->format('Y-m-d')] = $newTimeClass;
                }
            }
        }

        $weeklyData['time'] = $timeData;

        return $weeklyData;
    }
}
