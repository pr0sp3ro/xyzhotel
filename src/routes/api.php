<?php

use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth', 'gate:guest'])->group(function () {
    // dodanie rezerwacji
    Route::get('/bookings/create', [BookingController::class, 'createNewBooking']);
    Route::post('/bookings', [BookingController::class, 'store']);

    // usuniecie rezerwacji
    Route::delete('/bookings/{booking}', [BookingController::class, 'deleteBooking']);

    // wszystkie rezerwacje
    Route::get('/bookings', [BookingController::class, 'index']);
    // wyszukanie rezerwacji
    Route::get('/bookings/{booking}', [BookingController::class, 'show']);

    // edycja istniejacej rezerwacji
    Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit']);
    Route::put('/bookings/{booking}', [BookingController::class, 'update']);

    // sprawdzenie dostepnosci pokoi
    // wyswietlenie historii rezerwacji
    // potwierdzenie tozsamosci
});

Route::middleware(['auth', 'gate:admin'])->group(function () {
});
