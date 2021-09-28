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
route::get(('/dashboard'),[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
route::get(('/logout'),[CustomAuthController::class,'logout']);