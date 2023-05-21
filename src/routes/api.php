<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot']);
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);

Route::middleware('user_type:guest')->group(function () {
    // wszystkie rezerwacje
    Route::get('/bookings', [BookingController::class, 'index']);
    // wyszukanie rezerwacji
    Route::get('/bookings/{booking}', [BookingController::class, 'show']);

    // dodanie rezerwacji
    // Route::get('/bookings/create', [BookingController::class, 'createNewBooking']);
    Route::post('/bookings', [BookingController::class, 'store']);

    // usuniecie rezerwacji
    Route::delete('/bookings/{booking}', [BookingController::class, 'deleteBooking']);

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

Route::middleware('user_type:employee,admin')->group(function () {
    Route::get('/payments', [PaymentController::class, 'index']);
    Route::post('/payments', [PaymentController::class, 'processPayment']);
    Route::get('/payments/confirmation', [PaymentController::class, 'generateConfirmation']);
    Route::post('/payments/validate', [PaymentController::class, 'validateData']);
});

Route::middleware('user_type:admin')->group(function () {
    Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
    Route::post('/employees', [EmployeeController::class, 'create']);
    Route::delete('/employees/{employee}', [EmployeeController::class, 'delete']);
    Route::put('/employees/{employee}', [EmployeeController::class, 'update']);
    Route::put('/employees/{employee}/permissions', [EmployeeController::class, 'changePermissions']);
});
