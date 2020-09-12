<?php

namespace App;

use App\Helpers\Constant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ScheduleGroup extends Model
{
    protected $fillable = [
        'user_id', 'schedule_date', 'schedule_category', 'status', 'reason'
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

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function getScheduleDateTextAttribute()
    {
        return Carbon::parse($this->schedule_date)->format('M d, Y | l');
    }

    public function getUserInfoAttribute()
    {
        return $this->user;
    }

    public function getScheduleCategoryTextAttribute()
    {
        return Constant::LEAVE_DAY_CATEGORY[$this->schedule_category];
    }

    public function getScheduleCategoryClassAttribute()
    {
        return Constant::LEAVE_DAY_CATEGORY_CLASS[$this->schedule_category];
    }

    public function getLeaveTypeAttribute()
    {
        return Constant::LEAVE_TYPE[$this->status];
    }

    public function getIsEditedAttribute()
    {
        return Carbon::parse($this->schedule_date)->format('Y-m-d') > Carbon::now()->format('Y-m-d') ? true : false;
    }

    public function getDateFiledAttribute()
    {
        return Carbon::parse($this->created_at)->format('M d, Y H:i A - l').' | '.$this->created_at->diffForHumans();
    }
}
