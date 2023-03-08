<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\New_Auth\LoginController;
use App\Http\Controllers\New_Auth\RegisterController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

