<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => 1,
            'amount' => fake()->randomFloat(2, 10, 120),
            'status' => fake()->randomElement(['Pending', 'Completed', 'Failed']),
            'street' => fake()->realText(),
            'city' => fake()->sentence(),
            'postal_code' => fake()->randomNumber(5, true),
            'arrival_date' => fake()->dateTimeBetween('+1day', '+3day'),

        ];
    }
}
