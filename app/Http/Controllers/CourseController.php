<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
{
    $courses = Course::all(); // Fetch all courses from the database
    return response()->json($courses); // Return the courses as JSON
}

}
