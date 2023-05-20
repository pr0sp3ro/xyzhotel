<?php

use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth', 'gate:admin,employee'])->group(function () {
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{booking}', [BookingController::class, 'showOne']);
    Route::get('/bookings/{booking}', [BookingController::class, 'isCleaned']);
});

Route::middleware(['auth', 'gate:admin'])->group(function () {
    Route::post('/bookings', [BookingController::class, 'store']);
    Route::get('/bookings/create-new-booking', [BookingController::class, 'createNewBooking']);
    Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit']);
    Route::put('/bookings/{booking}', [BookingController::class, 'update']);
    Route::delete('/bookings/{booking}', [BookingController::class, 'deleteBooking']);
});
