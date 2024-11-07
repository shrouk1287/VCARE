<?php

use App\Http\Controllers\front\AppointmentController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\DoctorController;
use App\Http\Controllers\front\MajorController;
use App\Http\Controllers\front\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class,"index"]); 
Route::get('/majors', [MajorController::class,"index"]);
Route::get('/doctors', [DoctorController::class,"index"]);
Route::get('/auth', [AuthController::class,"index"]);
Route::get('/appointment', [AppointmentController::class,"index"]);

Route::get('/contact', [ContactController::class,"index"]);
Route::post('/send-message', [ContactController::class,"sendMessage"]);

require_once('admin.php');

