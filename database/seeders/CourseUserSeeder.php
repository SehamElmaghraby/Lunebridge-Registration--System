<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('courses_user')->insert([
            ['course_id' => 1, 'user_id' => 2],
            ['course_id' => 2, 'user_id' => 2],
            ['course_id' => 1, 'user_id' => 3],
        ]);

    }
}
