<?php

namespace App\Helpers;

class Constant {

    const ERROR_UNAUTHORIZED = "You are unauthorized to access this system";
    const ERROR_SERVER = "Request cannot processed due to internal server error";
    
    const PROFILE_UPDATED = "Profile information has been updated";
    const SCHEDULE_ADDED = "Schedule already been set";
    const SCHEDULE_UPDATED = "Schedule already been updated";

    const USER_TYPE = [
        'ADMIN' => 1,
        'TEACHER' => 2,
        'STUDENT' => 3
    ];

    const GENDER = [
        1 => 'Male',
        2 => 'Female'
    ];

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

    const LEAVE_DAY_CATEGORY = [
        1 => 'Whole Day',
        2 => 'Half-day Morning',
        3 => 'Half-day Afternoon'
    ];

    const LEAVE_DAY_CATEGORY_CLASS = [
        1 => 'badge badge-pill badge-success',
        2 => 'badge badge-pill badge-warning',
        3 => 'badge badge-pill badge-info'
    ];

    const LEAVE_TYPE = [
        1 => 'Sick Leave',
        2 => 'Vacation Leave',
        3 => 'Emergency Leave',
        4 => 'Others'
    ];

    const LESSON_STATUS = [
        0 => 'On Going',
        1 => 'Cancelled',
        2 => 'Success',
        3 => 'Not Active',
        4 => 'No Show',
        5 => 'Late'
    ];

    const LESSON_STATUS_COLOR_TYPE = [
        0 => 'warning',
        1 => 'danger',
        2 => 'success',
        3 => 'secondary',
        4 => 'info',
        5 => 'danger'
    ];

    const ACTIVITY_TYPE = [
        // User / Profile / Password
        1 => [
            'class' => 'info',
            'image' => 'fa-user bg-info'
        ],
        // Calendar Info
        2 => [
            'class' => 'warning',
            'image' => 'fa-calendar-alt bg-warning'
        ],
        // Salary Management
        3 => [
            'class' => 'primary',
            'image' => 'fa-money-check-alt bg-primary'
        ]
    ];

    const LEAVE_DAYS_LIST = [
        1 => ['08:00', '09:00', '10:00', '11:00', '12:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00'],
        2 => ['08:00', '09:00', '10:00', '11:00', '12:00'],
        3 => ['01:00', '02:00', '03:00', '04:00', '05:00', '06:00']
    ];
    
}