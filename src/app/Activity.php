<?php

namespace App;

use App\Helpers\Constant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
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
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function getCreatedDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('M d, Y');
    }

    public function getClassTypeAttribute()
    {
        return Constant::ACTIVITY_TYPE[$this->type];
    }

    public function getCreatedDateReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public static function getActivities($user_id)
    {
        $activities = self::where('user_id', $user_id)
            ->orderBy('created_at', 'DESC')
            ->get();

        $activities_array = [];
        foreach ($activities as $activity) {
            $activities_array[$activity->date]['date'] = Carbon::parse($activity->date)->format('M d, Y | l');
            $activities_array[$activity->date]['data'][] = $activity;
        }

        return $activities_array;
    }
}
