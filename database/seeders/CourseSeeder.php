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

        Course::create(['course_name' => 'Mathematics1', 'course_code' => 'Math104', 'credit_hours' => 3]);
Course::create(['course_name' => 'Operating Systems', 'course_code' => 'OS231', 'credit_hours' => 4]);
Course::create(['course_name' => 'Network', 'course_code' => 'NET321', 'credit_hours' => 3]);
Course::create(['course_name' => 'Mathematics2', 'course_code' => 'Mth112', 'credit_hours' => 3]);
Course::create(['course_name' => 'Digital Systems', 'course_code' => 'DS236', 'credit_hours' => 3]);
Course::create(['course_name' => 'Computer Science', 'course_code' => 'CS321', 'credit_hours' => 3]);
Course::create(['course_name' => 'Mathematics3', 'course_code' => 'Mah115', 'credit_hours' => 3]);
Course::create(['course_name' => 'Software Engineering', 'course_code' => 'SWE231', 'credit_hours' => 4]);
Course::create(['course_name' => 'Probability', 'course_code' => 'PRO321', 'credit_hours' => 3]);
Course::create(['course_name' => 'Mathematics4', 'course_code' => 'MAT234', 'credit_hours' => 3]);
Course::create(['course_name' => 'Discrete Math', 'course_code' => 'DIS259', 'credit_hours' => 3]);
Course::create(['course_name' => 'Security', 'course_code' => 'SEC198', 'credit_hours' => 3]);
Course::create(['course_name' => 'Database Management System', 'course_code' => 'DBMS104', 'credit_hours' => 4]);
Course::create(['course_name' => 'Object Oriented Programming', 'course_code' => 'OOP231', 'credit_hours' => 4]);
Course::create(['course_name' => 'Algorithms', 'course_code' => 'ALG221', 'credit_hours' => 4]);

    }
}
