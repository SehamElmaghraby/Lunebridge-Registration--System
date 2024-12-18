<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentEnrollmentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/courses', function () {
//     return view('courses'); // This will load resources/views/courses.blade.php
// });

Route::get('/courses', [CourseController::class, 'index']);
Route::post('/enroll', [EnrollmentController::class, 'enroll']);

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('/admin/students',[AdminController::class,'indexStudents'])->name('admin-students.index');
Route::post('/admin/students', [AdminController::class, 'storeStudent'])->name('admin-students.store');
Route::delete('/admin/students/{id}', [AdminController::class, 'deleteStudent'])->name('admin-students.delete');

Route::get('/admin/courses', [AdminController::class, 'indexCourses'])->name('admin-courses.index');
Route::post('/admin/courses', [AdminController::class, 'storeCourse'])->name('admin-courses.store');
Route::delete('/admin/courses/{id}', [AdminController::class, 'deleteCourse'])->name('admin-courses.delete');
});

// Route::get('/academic-record', [EnrollmentController::class, 'academicRecord']);



Route::middleware(['auth'])->get('/dashboard', [StudentEnrollmentController::class, 'showProfile'])->name('dashboard');
// Route::middleware(['auth'])->delete('/drop',[EnrollmentController::Class,'dropcourse'])->name('student-drop');
Route::post('/enroll', [EnrollmentController::class, 'enroll'])->name('student-enroll');
Route::delete('/drop', [EnrollmentController::class, 'dropcourse'])->name('student-drop');



// Route::get('/student-profile', [EnrollmentController::class, 'show'])
//     ->name('student.profile');
    // ->middleware('auth');
     // Protect the route with authentication



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
