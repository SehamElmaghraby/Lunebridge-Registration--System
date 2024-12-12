<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create(['course_name' => 'Mathematics', 'course_code'=> 'Math104']);
        Course::create(['course_name' => 'Operating Systems','course_code'=>'OS231']);
        Course::create(['course_name' => 'Network','course_code'=>'NET321']);
    }
}
