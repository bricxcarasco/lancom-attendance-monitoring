<?php

namespace App;

use App\Helpers\Constant;
use Carbon\Carbon;
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

    public function toArray()
    {
        $array = parent::toArray();
        foreach ($this->getMutatedAttributes() as $key) {
            if (!array_key_exists($key, $array)) {
                $array[$key] = $this->{$key};   
            }
        }
        return $array;
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getGenderTextAttribute()
    {
        return Constant::GENDER[$this->gender];
    }

    public function getBirthdateTextAttribute()
    {
        return Carbon::parse($this->birthdate)->format('M d, Y');
    }

    public function getAccountAgeAttribute()
    {
        return $this->created_at->diffForHumans();
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
