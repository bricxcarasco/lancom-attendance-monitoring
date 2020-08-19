<?php

namespace App\Helpers;

class Constant {

    const ERROR_UNAUTHORIZED = "You are unauthorized to access this system";
    const ERROR_SERVER = "Request cannot processed due to internal server error";

    const ACCOUNTS = [
        'ADDED' => 'Account successfully added',
        'UPDATED' => 'Account successfully updated',
        'CHANGED_PASSWORD' => 'Account password successfully updated',
        'ENABLED' => 'Account successfully enabled',
        'DISABLED' => 'Account successfully disabled',
        'DELETED' => 'Account successfully deleted',
        'INACTIVE_ACCOUNT' => 'Account has been inactive'
    ];

    const DAYS_IN_NUMBER = [
        'Monday' => 1,
        'Tuesday' => 2,
        'Wednesday' => 3,
        'Thursday' => 4,
        'Friday' => 5,
        'Saturday' => 6,
        'Sunday' => 7
    ];

    const DAYS_ABBR = [
        'Monday' => 'Mon',
        'Tuesday' => 'Tue',
        'Wednesday' => 'Wed',
        'Thursday' => "Thurs",
        'Friday' => 'Fri',
        'Saturday' => 'Sat',
        'Sunday' => 'Sun'
    ];

    const PH_TIME = [
        "08:00",
        "09:00",
        "10:00",
        "11:00",
        "12:00",
        "01:00",
        "02:00",
        "03:00",
        "04:00",
        "05:00",
        "06:00"
    ];

    const JA_TIME = [
        "08:00" => "09:00",
        "09:00" => "10:00",
        "10:00" => "11:00",
        "11:00" => "12:00",
        "12:00" => "01:00",
        "01:00" => "02:00",
        "02:00" => "03:00",
        "03:00" => "04:00",
        "04:00" => "05:00",
        "05:00" => "06:00",
        "06:00" => "07:00"
    ];

    const LEAVE_TYPE = [
        1 => 'Sick Leave',
        2 => 'Vacation Leave',
        3 => 'Emergency Leave',
        4 => 'Others'
    ];
    
}