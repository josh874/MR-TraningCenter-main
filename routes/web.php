<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomeContent');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::post('delete/{id}', [HomeController::class, 'Delete']);
Route::post('delete/{id}', [StudentController::class, 'Delete']);
Route::post('/edit', [HomeController::class, 'update']);
Route::post('/studentedit', [StudentController::class, 'update']);

// Route::get('/dashboared', [StudentController::class, 'index'])->name('Dashboared');
Route::get('/dashboared', [ChartController::class, 'index'])->name('Dashboared');

Route::get('/HomeM', function () {return view('HomeContent');});
Route::get('/sidebar', function () {return view('sidebar');});
Route::get('/S-Registration', function () {return view('StudentRegistration');});
Route::post('/studentRegister', [StudentController::class, 'create']);

// Route::get('/dashboared', function () {  return view('Dashboared'); });
Route::get('/profile', function () {return view('Profile');});
