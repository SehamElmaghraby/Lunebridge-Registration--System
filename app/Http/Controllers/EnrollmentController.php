<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    //
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
        return response()->json(['message' => 'Enrollment successful']);
    // } catch (\Exception $e) {
        // Log the error and return a 500 error with the exception message
        // Log::error('Enrollment failed: ' . $e->getMessage());
        // return response()->json(['error' => 'Enrollment failed'], 500);
    // }

}
     public function drop(Request $request)
   {
    $request->validate([
        'course_id' => 'required|exists:courses,id',
    ]);

    $user = auth()->user();


    $user->courses()->detach($request->course_id);

    // return redirect()->route('courses.index')->with('success', 'Course dropped successfully!');
    return response()->json(['message' => 'Dropped successfully!']);
   }

   public function academicRecord()
{
    $user = auth()->user();

    $courses = $user->courses;

    return response()->json($courses);
}


}
