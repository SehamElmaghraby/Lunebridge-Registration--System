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
        Student::create([
            'student_id' => '2022456',
            'first_name' => 'Fatma',
            'last_name' => 'Hassan',
        ]);

        Student::create([
            'student_id' => '2022789',
            'first_name' => 'Omar',
            'last_name' => 'Mahmoud',
        ]);

        Student::create([
            'student_id' => '2022010',
            'first_name' => 'Mona',
            'last_name' => 'Abdelrahman',
        ]);

        Student::create([
            'student_id' => '2022020',
            'first_name' => 'Mohamed',
            'last_name' => 'Fahmy',
        ]);

        Student::create([
            'student_id' => '2021012',
            'first_name' => 'Yasmin',
            'last_name' => 'Gaber',
        ]);

        Student::create([
            'student_id' => '2020123',
            'first_name' => 'Tamer',
            'last_name' => 'Shawky',
        ]);

        Student::create([
            'student_id' => '2022050',
            'first_name' => 'Sara',
            'last_name' => 'Ali',
        ]);

        Student::create([
            'student_id' => '2023123',
            'first_name' => 'Khaled',
            'last_name' => 'El-Masry',
        ]);

        Student::create([
            'student_id' => '2022090',
            'first_name' => 'Salma',
            'last_name' => 'Gamal',
        ]);
    }
    }

