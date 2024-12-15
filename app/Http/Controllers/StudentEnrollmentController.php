<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentEnrollmentController extends Controller
{
    // Show student profile with enrolled courses
    public function showProfile()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the enrolled courses for the student
        // This also includes the pivot data (like the relationship between the student and course)
        $courses = $user->courses;

        // Return the view with student and courses data
        return view('student-profile', compact('user', 'courses'));
    }
}
