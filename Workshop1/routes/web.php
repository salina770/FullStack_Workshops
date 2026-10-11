<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

// Resource routes for Students and Courses
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);

// Redirect homepage to Students list
Route::get('/', fn () => redirect()->route('students.index'));
