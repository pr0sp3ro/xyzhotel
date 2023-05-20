<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'booking_id' => 1,
            'is_confirmed' => $this->faker->boolean,
            'payment_date' => Carbon::now(),
            'amount' => $this->faker->randomFloat(2, 10, 500),
            'currency' => $this->faker->currencyCode,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
