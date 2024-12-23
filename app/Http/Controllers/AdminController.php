<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Course;

class AdminController extends Controller
{
    public function dashboard()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('admin-dashboard',[
            'students'=>$students,
            'courses' => $courses  ]);
    }
    // Manage Students
    public function indexStudents()
    {
        return view('admin-students.index',[
            'students'=>$students
        ]);
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        Student::create($request->only('student_id', 'first_name', 'last_name'));
        return redirect()->route('admin-dashboard')->with('success', 'Student added successfully!');
    }

    public function deleteStudent($id)
    {
        $student = Student::where('student_id', $id)->firstOrFail();
        $user = User::where('student_id', $id)->first();
        // Delete enrollments
        if ($user) {
            $user->delete();
        }
        // Delete the student
        $student->delete();

        return redirect()->route('admin-dashboard')->with('success', 'Student deleted successfully!');
    }

    // Manage Courses
    public function indexCourses()
    {
        $courses = Course::all();
        return view('admin-courses.index', compact('courses'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'course_code' => 'required|unique:courses,course_code',
            'course_name' => 'required|unique:courses,course_name',
            // 'description' => 'nullable|string',
            'credit_hours' => 'required|integer|between:0,4',
        ]);

        // Course::create($request->only('course_name', 'course_code'));
        Course::create([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'credit_hours'=>$request->credit_hours,
        ]);
        return redirect()->route('admin-dashboard')->with('success', 'Course added successfully!');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);

        // Detach students from the course
        $course->students()->detach();

        // Delete the course
        $course->delete();

        return redirect()->route('admin-dashboard')->with('success', 'Course deleted successfully!');
    }
}
