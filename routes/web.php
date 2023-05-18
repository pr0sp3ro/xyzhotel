<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, "index"])->name('index');
// });

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "login"]);
