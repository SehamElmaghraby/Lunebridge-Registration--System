<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Course;
use App\Models\User;


use Illuminate\Http\Request;

class EnrollmentController extends Controller
{

    public function enroll(Request $request)
{

        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        // Get the currently authenticated student
        $user = auth()->user(); // assuming you're using the `users` table for authentication

        // Check if the student is already enrolled in the course
        $alreadyEnrolled = $user->courses()->where('course_id', $request->course_id)->exists();

        if ($alreadyEnrolled) {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'You are already enrolled in this course.');
        }

        // Enroll the student in the course
        $user->courses()->attach($request->course_id);
        // Return a success response
        return redirect()->back()->with('success', 'Course added successfully!');

}


     public function dropCourse(Request $request)
   {
    $request->validate([
        'course_id' => 'required|exists:courses,id',
    ]);

    $user = auth()->user();


    $user->courses()->detach($request->course_id);

    // return view('student-profile',['user'=>$user]);
    return redirect()->back()->with('success', 'Course dropped successfully!');
   }

}
