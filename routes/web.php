<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth',[AuthController::class,'index'])->name('user.index');

Route::get('/login',[AuthController::class,'loginCreate'])->name('auth.login');
Route::get('/register',[AuthController::class,'registerCreate'])->name('auth.register');

Route::post('/login-store',[AuthController::class,'login'])->name('login');
Route::post('/register-store',[AuthController::class,'register'])->name('register.store');
