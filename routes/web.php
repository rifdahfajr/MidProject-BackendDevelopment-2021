<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/signup', [SignupController::class, 'getSignUp'])->name('getSignUp');

Route::post('/signup-user', [SignupController::class, 'signupUser'])->name('signupUser');

Route::get('/login', [LoginController::class, 'getLogin'])->name('getLogin');
Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');

Route::get('/user', function (){
    return view('user');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/course', [CourseController::class, 'getCourse']);
