<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Classes\Week;
use App\Http\Controllers\Classes\Time;
use App\Helpers\Constant;
use App\Schedule;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class IndexController extends Controller
{
    public function index($date)
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
            // $week->schedule = []; // Schedule::where('user_id', 2)->where('schedule_date', $date->format('Y-m-d'))->get();
            $weeklyData['week'][$date->format('Y-m-d')] = $week;
        }

        $timeData = [];
        foreach(Constant::PH_TIME AS $time) {
            $timeData[$time]['time'] = $time;
            foreach ($period as $date) {
                $schedule = Schedule::where('user_id', 2)->where('schedule_date', $date->format('Y-m-d'))->where('schedule_time', $time)->first();
                if ($schedule) {
                    $newTimeClass = new Time();
                    $newTimeClass->date = $date->format('Y-m-d');
                    $newTimeClass->ph_time = $time;
                    $newTimeClass->ja_time = Constant::JA_TIME[$time];
                    $newTimeClass->data = $schedule;
                    $timeData[$time][$date->format('Y-m-d')][] = $newTimeClass;
                }
            }
        }

        $weeklyData['time'] = $timeData;

        return $weeklyData;
    }

}
