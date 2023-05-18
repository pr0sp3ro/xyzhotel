<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, "index"])->name('index');
Route::get('/login', [AuthController::class, "login"])->name('login');
