<?php

use App\Http\Controllers\CodeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CodeController::class, 'index']);

Route::get('/codes', [CodeController::class, 'index']);

Route::get('/codes/create', [CodeController::class, 'create']);
Route::post('/codes/store', [CodeController::class, 'store'])->name('codes.store');

Route::get('/codes/delete', [CodeController::class, 'delete']);
