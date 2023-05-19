<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingsAll() {
        return view('bookings.index');
    }

    public function bookingsEdit() {
        return view('bookings.edit');
    }

    public function bookingsAdd() {
        return view('bookings.add');
    }
}
