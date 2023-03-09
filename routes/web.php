<?php

use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\CalenderController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\New_Auth\LoginController;
use App\Http\Controllers\New_Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });

Route::get('/', [LoginController::class, 'showLoginPage'])->name('signin');
Route::get('/signup', [RegisterController::class, 'showRegisterPage'])->name('signup');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/calender', [PagesController::class, 'activityPlanner'])->name('calender');
Route::resource('courses', CourseController::class);
Route::resource('lecturers', LecturerController::class);
Route::resource('calenders', CalenderController::class);
Route::resource('attendances', AttendanceController::class);

