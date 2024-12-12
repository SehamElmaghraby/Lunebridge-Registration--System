<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/courses', function () {
    return view('courses'); // This will load resources/views/courses.blade.php
});
// Route::get('/courses', [CourseController::class, 'index']);
// Route::post('/enroll', [EnrollmentController::class, 'enroll']);
// Route::post('/drop',[EnrollmentController::Class,'drop']);
// Route::get('/academic-record', [EnrollmentController::class, 'academicRecord']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
