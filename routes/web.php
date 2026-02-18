<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Route;


Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('auth.register.form');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/login', [AuthController::class, 'showLogin'])->name('auth.login.form');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::redirect('/', '/auth/login');

Route::middleware(['auth'])->group(function() {
  Route::get('/codes', [CodeController::class, 'index'])->name('index');
  Route::get('/codes/create', [CodeController::class, 'create']);
  Route::post('/codes/store', [CodeController::class, 'store'])->name('codes.store');
  Route::get('/codes/delete', [CodeController::class, 'delete'])->name('codes.delete');
  Route::post('/codes/destroy', [CodeController::class, 'destroy'])->name('codes.destroy');
});

