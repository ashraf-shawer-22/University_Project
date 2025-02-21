<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;

Route::get('/', function () {
    return view('login');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/department',[DepartmentController::class, 'index'])->name('department.index');
Route::get('/overview', function () {
    $students= Student::count();
    $courses= Course::count();
    $instructors= Instructor::count();
    return view('home',compact('students','courses', 'instructors'));
})->name('overview');

Route::get('/overview/instructor', [InstructorController::class, 'index'])->name('instructor');
Route::get('/overview/instructor/is', [InstructorController::class, 'isIndex'])->name('instructor.is');
Route::get('/overview/instructor/cs', [InstructorController::class, 'csIndex'])->name('instructor.cs');
Route::get('/overview/instructor/ai', [InstructorController::class, 'aiIndex'])->name('instructor.ai');
Route::get('/overview/instructor/bio', [InstructorController::class, 'bioIndex'])->name('instructor.bio');



















// Route::get('/test', function () {
//     $user = new User();
//     $user->name = 'Abdelfattah Mohammed';
//     $user->email = 'abdo@gmail.com';
//     $user->password = bcrypt('12345678');
//     $user->save();
// });
