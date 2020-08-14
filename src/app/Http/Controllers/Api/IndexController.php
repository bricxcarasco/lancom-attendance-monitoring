<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Helpers\Constant;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $period = CarbonPeriod::create('2017-01-01', '2030-12-31');
        $dates = [];

        foreach ($period as $date) {
            $dates[$date->format('Y-m')][$date->format('W')][] = [
                "date" => $date->format('Y-m-d'),
                "year_month" => $date->format('Y-m'),
                "week" => $date->format('W'),
                "day" => $date->format('l'),
                "day_number" => Constant::DAYS_IN_NUMBER[$date->format('l')],
            ];
        }

        return $dates;
    }

}
