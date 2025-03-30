<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
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
            'dish_id' => fake()->numberBetween(1, 25),
            'order_id' => fake()->numberBetween(1, 8),
            'quantity' => fake()->randomNumber(1, 12),
            'total' => fake()->numberBetween(12, 300),


        ];
    }
}
