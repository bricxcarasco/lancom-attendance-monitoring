<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Classes\Week;
use App\Http\Controllers\Classes\Time;
use App\Helpers\Constant;
use App\Schedule;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class CalendarController extends Controller
{
    public static function getWeekList($date)
    {
        $carbonDate = Carbon::createFromFormat("Y-m-d", $date);
        $currentFirstDayOfWeek = Carbon::parse($carbonDate->startOfWeek())->format('Y-m-d');
        $currentEndDayOfWeek = Carbon::parse($carbonDate->endOfWeek())->format('Y-m-d');
        $weekRange = Carbon::parse($carbonDate->startOfWeek())->format('M d'). " - ".Carbon::parse($carbonDate->endOfWeek())->format('M d, Y');

        $period = CarbonPeriod::create($currentFirstDayOfWeek , $currentEndDayOfWeek);
        
        $weeklyData = [];
        $weeklyData['week_range'] = $weekRange;
        $weeklyData['next_week_range'] = Carbon::parse(Carbon::createFromFormat("Y-m-d", $date)->startOfWeek()->addWeek())->format('Y-m-d');
        $weeklyData['prev_week_range'] = Carbon::parse(Carbon::createFromFormat("Y-m-d", $date)->startOfWeek()->subWeek())->format('Y-m-d');
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
            foreach ($period as $date) {
                $newTimeClass = new Time();
                $newTimeClass->date = $date->format('Y-m-d');
                $newTimeClass->ph_time = $time;
                $newTimeClass->ja_time = Constant::JA_TIME[$time];
                $newTimeClass->data = Schedule::where('user_id', 2)->where('schedule_date', $date->format('Y-m-d'))->where('schedule_time', $time)->get();
                $timeData[$time][] = $newTimeClass;
            }
        }

        $weeklyData['time'] = $timeData;

        return $weeklyData;
    }
}
