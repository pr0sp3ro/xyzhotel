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
                'booking_id' => 1,
                'is_confirmed' => $this->faker->boolean,
                'payment_date' => $this->faker->dateTime,
                'amount' => $this->faker->randomFloat(2, 0, 999999.99),
                'currency' => $this->faker->currencyCode,
                'created_at' => now(),
                'updated_at' => now(),
        ];
    }
}
