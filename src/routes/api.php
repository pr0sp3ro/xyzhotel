<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth', 'gate:guest'])->group(function () {
    // dodanie rezerwacji
    // Route::get('/bookings/create', [BookingController::class, 'createNewBooking']);
    Route::post('/bookings', [BookingController::class, 'store']);

    // usuniecie rezerwacji
    Route::delete('/bookings/{booking}', [BookingController::class, 'deleteBooking']);

    // wszystkie rezerwacje
    Route::get('/bookings', [BookingController::class, 'index']);
    // wyszukanie rezerwacji
    Route::get('/bookings/{booking}', [BookingController::class, 'show']);

    // edycja istniejacej rezerwacji
    // Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit']);
    Route::put('/bookings/{booking}', [BookingController::class, 'update']);

    // wyswietlenie historii rezerwacji
    Route::get('/bookings/history', [BookingController::class, 'showHistory']);

    // potwierdzenie tozsamosci
    Route::get('/confirm-identity', [BookingController::class, 'confirmIdentity']);

    // sprawdzenie dostepnosci pokoi
    Route::get('/availability', [RoomController::class, 'checkAvailability']);
});

Route::middleware(['auth', 'gate:admin,employee'])->group(function () {
    Route::get('/payments', [PaymentController::class, 'index']);
    Route::post('/payments', [PaymentController::class, 'processPayment']);
    Route::get('/payments/confirmation', [PaymentController::class, 'generateConfirmation']);
    Route::post('/payments/validate', [PaymentController::class, 'validateData']);
});
