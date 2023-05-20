<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return response()->json($bookings);
    }

    public function create()
    {
        return response()->json([
            'message' => 'Provide booking creation form or relevant information',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'place' => 'required|string',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'booking_date' => 'required|date',
            'total_guests' => 'required|integer',
            'num_adults' => 'required|integer',
            'num_children' => 'required|integer',
            'travel_purpose' => 'required|string',
            'status' => 'required|string',
        ]);

        $booking = Booking::create($validatedData);

        return response()->json([
            'message' => 'Booking created successfully',
            'booking' => $booking,
        ]);
    }

    public function show(Booking $booking)
    {
        return response()->json($booking);
    }

    public function edit(Booking $booking)
    {
    }

    public function update(Request $request, Booking $booking)
    {
    }

    public function destroy(Booking $booking)
    {
        // Delete the specified booking
        $booking->delete();

        // Return a JSON response indicating success
        return response()->json([
            'message' => 'Booking deleted successfully',
        ]);
    }
}
