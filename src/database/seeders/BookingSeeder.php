<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    public function run()
    {
        $numberOfBookings = 10;
        Booking::factory()->count($numberOfBookings)->create();
    }
}
