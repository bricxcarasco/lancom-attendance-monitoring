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
            'student_id' => 7,
            'teacher_id' => 4,
            'schedule_datetime' => '2020-08-17 10:00',
            'schedule_date' => '2020-08-17',
            'schedule_time' => '10:00',
            'units' => 1,
            'teacher_login' => '2020-08-17 09:35',
            'teacher_logout' => '2020-08-17 12:07',
            'teacher_status' => 2,
            'student_login' => '2020-08-17 09:22',
            'student_logout' => '2020-08-17 12:03',
            'student_status' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 4,
            'schedule_datetime' => '2020-08-17 11:00',
            'schedule_date' => '2020-08-17',
            'schedule_time' => '11:00',
            'units' => 1,
            'teacher_login' => '2020-08-17 09:35',
            'teacher_logout' => '2020-08-17 12:07',
            'teacher_status' => 2,
            'student_login' => '2020-08-17 09:22',
            'student_logout' => '2020-08-17 12:03',
            'student_status' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 4,
            'schedule_datetime' => '2020-08-17 12:00',
            'schedule_date' => '2020-08-17',
            'schedule_time' => '12:00',
            'units' => 1,
            'teacher_login' => '2020-08-17 09:35',
            'teacher_logout' => '2020-08-17 12:07',
            'teacher_status' => 2,
            'student_login' => '2020-08-17 09:22',
            'student_logout' => '2020-08-17 12:03',
            'student_status' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 3,
            'schedule_datetime' => '2020-08-20 01:00',
            'schedule_date' => '2020-08-20',
            'schedule_time' => '01:00',
            'units' => 1,
            'teacher_login' => '2020-08-20 12:33',
            'teacher_logout' => '2020-08-20 03:06',
            'teacher_status' => 5,
            'student_login' => '2020-08-20 12:47',
            'student_logout' => '2020-08-20 03:02',
            'student_status' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 3,
            'schedule_datetime' => '2020-08-20 02:00',
            'schedule_date' => '2020-08-20',
            'schedule_time' => '02:00',
            'units' => 1,
            'teacher_login' => '2020-08-20 12:33',
            'teacher_logout' => '2020-08-20 03:06',
            'teacher_status' => 5,
            'student_login' => '2020-08-20 12:47',
            'student_logout' => '2020-08-20 03:02',
            'student_status' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('lessons')->insert([
            'student_id' => 7,
            'teacher_id' => 3,
            'schedule_datetime' => '2020-08-20 03:00',
            'schedule_date' => '2020-08-20',
            'schedule_time' => '03:00',
            'units' => 1,
            'teacher_login' => '2020-08-20 12:33',
            'teacher_logout' => '2020-08-20 03:06',
            'teacher_status' => 5,
            'student_login' => '2020-08-20 12:47',
            'student_logout' => '2020-08-20 03:02',
            'student_status' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

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
