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
    // try {
        // Validate the incoming request
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        // Get the currently authenticated student
        $user = auth()->user(); // assuming you're using the `users` table for authentication


        // Enroll the student in the course
        $user->courses()->attach($request->course_id);

        // Return a success response

        return redirect()->back()->with('success', 'Course added successfully!');

        // } catch (\Exception $e) {
        // Log the error and return a 500 error with the exception message
        // Log::error('Enrollment failed: ' . $e->getMessage());
        // return response()->json(['error' => 'Enrollment failed'], 500);
    // }

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


// public function dropCourse(Request $request)
// {
//     // Validate the course ID exists in the request
//     $request->validate([
//         'course_id' => 'required|exists:courses,id',
//     ]);

//     // Get the authenticated user
//     $user = auth()->user();

//     // Check if the user is already enrolled in the course
//     if (!$user->courses()->where('course_id', $request->course_id)->exists()) {
//         return redirect()->back()->with('error', 'You are not enrolled in this course.');
//     }

//     // Detach the course (drop the course)
//     $user->courses()->detach($request->course_id);

//     // Return a success message and redirect
//     return redirect()->back()->with('success', 'Course dropped successfully!');
// }


//    public function academicRecord()
// {
//     $user = auth()->user();

//     $courses = $user->courses;

//     return response()->json($courses);
// }


}
