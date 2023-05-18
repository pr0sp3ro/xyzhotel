<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, "index"])->name('login');
Route::post('/login', [LoginController::class, "login"]);

// Route::middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, "index"])->name('index');
    Route::get('/rezerwacje', [BookingController::class, "bookingsAll"])->name('rezerwacje');
    Route::get('/edytuj-rezerwacje', [BookingController::class, "bookingsEdit"])->name('edytuj-rezerwacje');
    Route::get('/dodaj-rezerwacje', [BookingController::class, "bookingsAdd"])->name('dodaj-rezerwacje');
// });
