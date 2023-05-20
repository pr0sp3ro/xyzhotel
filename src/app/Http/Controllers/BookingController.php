<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $bookingData = $request->all();
        $booking = Booking::create($bookingData);

        return response()->json([
            'message' => 'Booking created successfully',
            'booking' => $booking,
        ]);
    }

    public function deleteBooking(Booking $booking)
    {
        $booking->delete();

        return response()->json([
            'message' => 'Booking deleted successfully',
        ]);
    }

    public function index()
    {
        $bookings = Booking::all();

        return response()->json([
            'bookings' => $bookings,
        ]);
    }

    public function show(Booking $booking)
    {
        return response()->json([
            'booking' => $booking,
        ]);
    }

    public function update(Request $request, Booking $booking)
    {
        $bookingData = $request->all();
        $booking->update($bookingData);

        return response()->json([
            'message' => 'Booking updated successfully',
            'booking' => $booking,
        ]);
    }

    public function showHistory()
    {
        return response()->json([
            'message' => 'Booking history retrieved',
            'history' => [], // Add the actual booking history data here
        ]);
    }

    public function confirmIdentity()
    {
        return response()->json([
            'message' => 'Identity confirmed',
        ]);
    }
}
