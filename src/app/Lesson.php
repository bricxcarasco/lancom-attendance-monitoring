<?php

namespace App;

use App\Helpers\Constant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
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
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function getTeacherInfoAttribute()
    {
        return User::find($this->teacher_id);
    }

    public function getStudentInfoAttribute()
    {
        return User::find($this->student_id);
    }

    public function getTeacherStatusTextAttribute()
    {
        return Constant::LESSON_STATUS[$this->teacher_status];
    }

    public function getStudentStatusTextAttribute()
    {
        return Constant::LESSON_STATUS[$this->student_status];
    }

    public function getTeacherUiTypeAttribute()
    {
        return Constant::LESSON_STATUS_COLOR_TYPE[$this->teacher_status];
    }

    public function getStudentUiTypeAttribute()
    {
        return Constant::LESSON_STATUS_COLOR_TYPE[$this->student_status];
    }

    public function getDateFiledAttribute()
    {
        return Carbon::parse($this->created_at)->format('M d, Y H:i A - l').' | '.$this->created_at->diffForHumans();
    }
}
