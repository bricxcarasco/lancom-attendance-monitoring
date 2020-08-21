<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'student_id' => 6,
            'teacher_id' => 2,
            'schedule_datetime' => '2020-08-25 10:00',
            'schedule_date' => '2020-08-25',
            'schedule_time' => '10:00',
            'units' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 6,
            'teacher_id' => 2,
            'schedule_datetime' => '2020-08-25 11:00',
            'schedule_date' => '2020-08-25',
            'schedule_time' => '11:00',
            'units' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 6,
            'teacher_id' => 2,
            'schedule_datetime' => '2020-08-25 12:00',
            'schedule_date' => '2020-08-25',
            'schedule_time' => '12:00',
            'units' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 4,
            'schedule_datetime' => '2020-08-26 02:00',
            'schedule_date' => '2020-08-26',
            'schedule_time' => '02:00',
            'units' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 4,
            'schedule_datetime' => '2020-08-26 03:00',
            'schedule_date' => '2020-08-26',
            'schedule_time' => '03:00',
            'units' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 4,
            'schedule_datetime' => '2020-08-26 04:00',
            'schedule_date' => '2020-08-26',
            'schedule_time' => '04:00',
            'units' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
