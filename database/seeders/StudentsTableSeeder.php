<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::create([
            'student_id' => '120001',
            'first_name' => 'John',
            'last_name' => 'Doe',
        ]);

        Student::create([
            'student_id' => '100002',
            'first_name' => 'Jane',
            'last_name' => 'Smith',
        ]);

        Student::create([
            'student_id' => '202003',
            'first_name' => 'Michael',
            'last_name' => 'Johnson',
        ]);
    }
}
