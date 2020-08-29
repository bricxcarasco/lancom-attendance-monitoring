<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Me',
            'email' => 'adminme@email.com',
            'user_type' => 1,
            'birthdate' => '2001-04-30',
            'gender' => 1,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher One',
            'email' => 'teacherone@email.com',
            'user_type' => 2,
            'birthdate' => '2001-04-30',
            'gender' => 2,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher Two',
            'email' => 'teachertwo@email.com',
            'user_type' => 2,
            'birthdate' => '2001-04-30',
            'gender' => 1,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher Three',
            'email' => 'teacherthree@email.com',
            'user_type' => 2,
            'birthdate' => '2001-04-30',
            'gender' => 1,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher Four',
            'email' => 'teacherfour@email.com',
            'user_type' => 2,
            'birthdate' => '2001-04-30',
            'gender' => 2,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Student One',
            'email' => 'studentone@email.com',
            'user_type' => 3,
            'birthdate' => '2001-04-30',
            'gender' => 1,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Student Two',
            'email' => 'studenttwo@email.com',
            'user_type' => 3,
            'birthdate' => '2001-04-30',
            'gender' => 2,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Student Three',
            'email' => 'studentthree@email.com',
            'user_type' => 3,
            'birthdate' => '2001-04-30',
            'gender' => 1,
            'address' => 'Tokyo Japan',
            'contact' => '09999999999',
            'education' => 'Bachelor of Science in Information Technology - Stanford University',
            'skills' => 'Programming, Literature, Multi-lingual',
            'notes' => 'The great power comes the great responsibility',
            'bio' => 'Software Engineer',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
