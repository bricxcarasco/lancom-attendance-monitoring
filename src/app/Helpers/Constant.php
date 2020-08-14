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
    
}