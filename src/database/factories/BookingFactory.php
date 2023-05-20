<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'room_id' => 5,
            'place' => $this->faker->city,
            'checkin_date' => $this->faker->date(),
            'checkout_date' => $this->faker->date(),
            'booking_date' => Carbon::now(),
            'total_guests' => $this->faker->randomNumber(),
            'num_adults' => $this->faker->randomNumber(),
            'num_children' => $this->faker->randomNumber(),
            'travel_purpose' => $this->faker->randomElement(['Business', 'Leisure']),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
