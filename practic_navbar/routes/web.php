<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [MainController::class, 'index']) ->name('home');
Route::get('/home', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about']) ->name('about');
Route::get('/services', [MainController::class, 'services']) ->name('services');
Route::get('/contact', [MainController::class, 'contact']) ->name('contact');


Route::post('student/store', [StudentsController::class, "store"])->name('student.store');
