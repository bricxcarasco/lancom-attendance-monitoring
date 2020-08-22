<?php

namespace App;

use App\Helpers\Constant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $hidden = [
        'created_at', 'updated_at',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserInfoAttribute()
    {
        return User::find($this->user_id);
    }

    public function getScheduleDatetimeAttribute($value)
    {
        return Carbon::parse($value)->format('M d, Y H:i A - l');
    }

    public function getLeaveTypeAttribute()
    {
        return Constant::LEAVE_TYPE[$this->status];
    }

    public function getDateFiledAttribute()
    {
        return Carbon::parse($this->created_at)->format('M d, Y H:i A - l').' | '.$this->created_at->diffForHumans();
    }
}