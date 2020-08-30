<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'user_id' => 6,
            'type' => 1,
            'activity' => 'To be announced',
            'date' => '2020-08-12',
            'created_at' => '2020-08-12 17:21:11',
            'updated_at' => '2020-08-12 17:21:11'
        ]);

        DB::table('activities')->insert([
            'user_id' => 6,
            'type' => 2,
            'activity' => 'A new task to be announced',
            'date' => '2020-08-20',
            'created_at' => '2020-08-20 17:21:11',
            'updated_at' => '2020-08-20 17:21:11'
        ]);

        DB::table('activities')->insert([
            'user_id' => 6,
            'type' => 3,
            'activity' => 'Oww this is great you great man',
            'date' => '2020-08-26',
            'created_at' => '2020-08-26 17:21:11',
            'updated_at' => '2020-08-26 17:21:11'
        ]);

        DB::table('activities')->insert([
            'user_id' => 6,
            'type' => 2,
            'activity' => 'Another one for the books',
            'date' => '2020-08-29',
            'created_at' => '2020-08-29 17:21:11',
            'updated_at' => '2020-08-29 17:21:11'
        ]);

        DB::table('activities')->insert([
            'user_id' => 6,
            'type' => 2,
            'activity' => 'How did you do that my man?',
            'date' => '2020-08-20',
            'created_at' => '2020-08-20 17:21:11',
            'updated_at' => '2020-08-20 17:21:11'
        ]);

        DB::table('activities')->insert([
            'user_id' => 6,
            'type' => 1,
            'activity' => 'Dont forgot the esence of the sparks',
            'date' => '2020-08-20',
            'created_at' => '2020-08-20 17:21:11',
            'updated_at' => '2020-08-20 17:21:11'
        ]);
    }
}
