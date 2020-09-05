<?php

namespace App;

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
}
