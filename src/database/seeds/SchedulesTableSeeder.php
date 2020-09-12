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
        // START
        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 1,
            'schedule_datetime' => '2020-09-11 08:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '08:00',
            'status' => 1,
            'reason' => 'Nani shiteruno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 1,
            'schedule_datetime' => '2020-09-11 09:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '09:00',
            'status' => 1,
            'reason' => 'Nani shiteruno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 1,
            'schedule_datetime' => '2020-09-11 10:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '10:00',
            'status' => 1,
            'reason' => 'Nani shiteruno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 1,
            'schedule_datetime' => '2020-09-11 11:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '11:00',
            'status' => 1,
            'reason' => 'Nani shiteruno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 1,
            'schedule_datetime' => '2020-09-11 12:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '12:00',
            'status' => 1,
            'reason' => 'Nani shiteruno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // END

        // START
        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_group_id' => 2,
            'schedule_datetime' => '2020-09-11 08:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '08:00',
            'status' => 2,
            'reason' => 'Doko ni ikimasu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_group_id' => 2,
            'schedule_datetime' => '2020-09-11 09:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '09:00',
            'status' => 2,
            'reason' => 'Doko ni ikimasu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_group_id' => 2,
            'schedule_datetime' => '2020-09-11 10:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '10:00',
            'status' => 2,
            'reason' => 'Doko ni ikimasu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_group_id' => 2,
            'schedule_datetime' => '2020-09-11 11:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '11:00',
            'status' => 2,
            'reason' => 'Doko ni ikimasu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 3,
            'schedule_group_id' => 2,
            'schedule_datetime' => '2020-09-11 12:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '12:00',
            'status' => 2,
            'reason' => 'Doko ni ikimasu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // END

        // START
        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_group_id' => 3,
            'schedule_datetime' => '2020-09-11 08:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '08:00',
            'status' => 3,
            'reason' => 'Arigatou Gozaimahita',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_group_id' => 3,
            'schedule_datetime' => '2020-09-11 09:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '09:00',
            'status' => 3,
            'reason' => 'Arigatou Gozaimahita',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_group_id' => 3,
            'schedule_datetime' => '2020-09-11 10:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '10:00',
            'status' => 3,
            'reason' => 'Arigatou Gozaimahita',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_group_id' => 3,
            'schedule_datetime' => '2020-09-11 11:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '11:00',
            'status' => 3,
            'reason' => 'Arigatou Gozaimahita',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 4,
            'schedule_group_id' => 3,
            'schedule_datetime' => '2020-09-11 12:00',
            'schedule_date' => '2020-09-11',
            'schedule_time' => '12:00',
            'status' => 3,
            'reason' => 'Arigatou Gozaimahita',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // END

        // START
        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 08:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '08:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 09:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '09:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 10:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '10:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 11:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '11:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 12:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '12:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 01:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '01:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 02:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '02:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 03:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '03:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 04:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '04:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 05:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '05:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 4,
            'schedule_datetime' => '2020-09-17 06:00',
            'schedule_date' => '2020-09-17',
            'schedule_time' => '06:00',
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // END

        // START
        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 5,
            'schedule_datetime' => '2020-09-20 01:00',
            'schedule_date' => '2020-09-20',
            'schedule_time' => '01:00',
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 5,
            'schedule_datetime' => '2020-09-20 02:00',
            'schedule_date' => '2020-09-20',
            'schedule_time' => '02:00',
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 5,
            'schedule_datetime' => '2020-09-20 03:00',
            'schedule_date' => '2020-09-20',
            'schedule_time' => '03:00',
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 5,
            'schedule_datetime' => '2020-09-20 04:00',
            'schedule_date' => '2020-09-20',
            'schedule_time' => '04:00',
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 5,
            'schedule_datetime' => '2020-09-20 05:00',
            'schedule_date' => '2020-09-20',
            'schedule_time' => '05:00',
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 2,
            'schedule_group_id' => 5,
            'schedule_datetime' => '2020-09-20 06:00',
            'schedule_date' => '2020-09-20',
            'schedule_time' => '06:00',
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // END

        // START
        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 6,
            'schedule_datetime' => '2020-09-21 08:00',
            'schedule_date' => '2020-09-21',
            'schedule_time' => '08:00',
            'status' => 4,
            'reason' => 'Ima nanji desu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 6,
            'schedule_datetime' => '2020-09-21 09:00',
            'schedule_date' => '2020-09-21',
            'schedule_time' => '09:00',
            'status' => 4,
            'reason' => 'Ima nanji desu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 6,
            'schedule_datetime' => '2020-09-21 10:00',
            'schedule_date' => '2020-09-21',
            'schedule_time' => '10:00',
            'status' => 4,
            'reason' => 'Ima nanji desu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 6,
            'schedule_datetime' => '2020-09-21 11:00',
            'schedule_date' => '2020-09-21',
            'schedule_time' => '11:00',
            'status' => 4,
            'reason' => 'Ima nanji desu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedules')->insert([
            'user_id' => 5,
            'schedule_group_id' => 6,
            'schedule_datetime' => '2020-09-21 12:00',
            'schedule_date' => '2020-09-21',
            'schedule_time' => '12:00',
            'status' => 4,
            'reason' => 'Ima nanji desu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // END
    }
}
