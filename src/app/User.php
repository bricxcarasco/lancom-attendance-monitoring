<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'birthdate',
        'contact',
        'address',
        'user_type',
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getActiveAdministratorAccounts()
    {
        return self::where('user_type', 1)->where('is_delete', 0)->get();
    }
}
