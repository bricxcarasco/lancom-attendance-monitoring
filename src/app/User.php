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

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public static function getActiveAdministratorAccounts()
    {
        return self::where('user_type', 1)->where('is_delete', 0)->get();
    }

    public static function getActiveTeacherAccounts()
    {
        return self::where('user_type', 2)->where('is_delete', 0)->get();
    }

    public static function getActiveStudentAccounts()
    {
        return self::where('user_type', 3)->where('is_delete', 0)->get();
    }
}
