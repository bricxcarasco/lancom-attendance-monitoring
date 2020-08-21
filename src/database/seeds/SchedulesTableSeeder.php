<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_datetime' => '2020-08-24 09:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '09:00',
            'status' => 1,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_datetime' => '2020-08-24 10:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '10:00',
            'status' => 1,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_datetime' => '2020-08-24 11:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '11:00',
            'status' => 1,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_datetime' => '2020-08-24 09:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '09:00',
            'status' => 2,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_datetime' => '2020-08-24 10:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '10:00',
            'status' => 2,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_datetime' => '2020-08-24 11:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '11:00',
            'status' => 2,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_datetime' => '2020-08-24 09:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '09:00',
            'status' => 3,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_datetime' => '2020-08-24 10:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '10:00',
            'status' => 3,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_datetime' => '2020-08-24 11:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '11:00',
            'status' => 3,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_datetime' => '2020-08-24 09:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '09:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_datetime' => '2020-08-24 10:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '10:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_datetime' => '2020-08-24 11:00',
            'schedule_date' => '2020-08-24',
            'schedule_time' => '11:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_datetime' => '2020-08-27 01:00',
            'schedule_date' => '2020-08-27',
            'schedule_time' => '01:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_datetime' => '2020-08-27 02:00',
            'schedule_date' => '2020-08-27',
            'schedule_time' => '02:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_datetime' => '2020-08-27 03:00',
            'schedule_date' => '2020-08-27',
            'schedule_time' => '03:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_datetime' => '2020-08-26 02:00',
            'schedule_date' => '2020-08-26',
            'schedule_time' => '02:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_datetime' => '2020-08-26 03:00',
            'schedule_date' => '2020-08-26',
            'schedule_time' => '03:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_datetime' => '2020-08-26 04:00',
            'schedule_date' => '2020-08-26',
            'schedule_time' => '04:00',
            'status' => 4,
            'reason' => 'Not Available',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
