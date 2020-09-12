<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ScheduleGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule_groups')->insert([
            'user_id' => 2,
            'schedule_date' => '2020-09-11',
            'schedule_category' => 2,
            'status' => 1,
            'reason' => 'Nani shiteruno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedule_groups')->insert([
            'user_id' => 3,
            'schedule_date' => '2020-09-11',
            'schedule_category' => 2,
            'status' => 2,
            'reason' => 'Doko ni ikimasu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedule_groups')->insert([
            'user_id' => 4,
            'schedule_date' => '2020-09-11',
            'schedule_category' => 2,
            'status' => 3,
            'reason' => 'Arigatou Gozaimahita',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedule_groups')->insert([
            'user_id' => 5,
            'schedule_date' => '2020-09-17',
            'schedule_category' => 1,
            'status' => 1,
            'reason' => 'Hajimemashite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedule_groups')->insert([
            'user_id' => 2,
            'schedule_date' => '2020-09-20',
            'schedule_category' => 3,
            'status' => 2,
            'reason' => 'Jibun o shinjitte',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('schedule_groups')->insert([
            'user_id' => 5,
            'schedule_date' => '2020-09-21',
            'schedule_category' => 2,
            'status' => 4,
            'reason' => 'Ima nanji desu ka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
