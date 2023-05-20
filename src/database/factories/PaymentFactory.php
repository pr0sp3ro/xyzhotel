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
            'is_available' => $this->faker->boolean,
            'price' => $this->faker->randomFloat(2, 50, 200),
            'room_number' => $this->faker->unique()->numberBetween(100, 999),
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'is_cleaned' => $this->faker->boolean,
            'description' => $this->faker->optional()->paragraph,
            'max_capacity' => $this->faker->randomNumber(2),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
