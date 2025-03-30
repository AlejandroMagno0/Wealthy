<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            //
            'order_id' => fake()->numberBetween(1, 8),
            'status' => fake()->randomElement(['Pending', 'Completed', 'Failed']),
            'number_card' => fake()->numerify('#### #### #### ####'),
            'owner' => fake()->name(),
            'date_expiration' => fake()->regexify('[0-3][1-9]/[24-32]'),
            'cvv' => fake()->randomNumber(3, true),

        ];
    }
}
