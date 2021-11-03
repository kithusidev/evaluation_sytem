<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
route::get(('/login'),[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
route::get(('/registration'),[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
route::POST(('/register-user'),[CustomAuthController::class,'registeruser'])->name('register-user');
route::post(('/login-user'),[CustomAuthController::class,'loginuser'])->name('login-user');
route::get(('/login-hod'),[CustomAuthController::class,'loginhod'])->name('login-hod');
route::get(('/login-lec'),[CustomAuthController::class,'loginlec'])->name('login-lec');
route::get(('/login-admin'),[CustomAuthController::class,'loginadmin'])->name('login-admin');
route::post(('/log-hod'),[CustomAuthController::class,'loghod'])->name('log-hod');
route::post(('/log-lec'),[CustomAuthController::class,'loglec'])->name('log-lec');
route::post(('/log-admin'),[CustomAuthController::class,'logadmin'])->name('log-admin');
route::get(('/student'),[CustomAuthController::class,'dashboard',])->middleware('isLoggedIn');
route::get(('/student/calender'),[CustomAuthController::class,'calender'])->middleware('isLoggedIn');
route::get(('/hod'),[CustomAuthController::class,'hod']);
route::get(('/admin'),[CustomAuthController::class,'admin']);
route::get(('/lecturer'),[CustomAuthController::class,'lec']);
route::get(('/logout'),[CustomAuthController::class,'logout']);
route::get(('/logouthod'),[CustomAuthController::class,'logouthod']);
route::get(('/logoutlec'),[CustomAuthController::class,'logoutlec']);
route::get(('/logoutadmin'),[CustomAuthController::class,'logoutadmin']);


