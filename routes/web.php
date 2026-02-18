<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')
    ->controller(AuthController::class)
    ->group(function(){
      Route::get('register', 'showRegister')->name('auth.register.form');
      Route::post('register', 'register')->name('auth.register');
      Route::get('login', 'showLogin')->name('auth.login.form');
      Route::post('login', 'login')->name('auth.login');
      Route::post('logout', 'logout')->name('auth.logout');
});

Route::redirect('/', '/auth/login');

Route::middleware(['auth'])
    ->prefix('codes')
    ->controller(CodeController::class)
    ->group(function() {
      Route::get('/',  'index')->name('index');
      Route::get('create', 'create');
      Route::post('store', 'store')->name('codes.store');
      Route::get('delete', 'delete')->name('codes.delete');
      Route::post('destroy', 'destroy')->name('codes.destroy');
});
