<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class StudentEnrollmentController extends Controller
{
    // Show student profile with enrolled courses
    public function showProfile()
    {
        // Get the authenticated user
        $allcourses = Course::all();

        $user = Auth::user();

        // Get the enrolled courses for the student
        // This also includes the pivot data (like the relationship between the student and course)
        $enrolledcourses = $user->courses;

        // Return the view with student and courses data
        // return view('student-profile', compact('user', 'enrolledcourses','allcourses'));
        return view('student-profile', [
                 'user'=>$user,
                 'allcourses' => $allcourses,
                 'enrolledcourses' => $enrolledcourses
            ]);

    }

    public function show()
    {
        // Fetch all courses
        // $allCourses = Course::all();

        // Fetch enrolled courses for the authenticated user
        // $enrolledCourses = auth()->user()->courses;


        // Pass data to the Blade file
        // return view('student-profile', [
        //     'allCourses' => $allCourses,
        //     'enrolledCourses' => $enrolledCourses
        // ]);
    }
}
