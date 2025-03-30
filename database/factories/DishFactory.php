<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
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
            'name' => fake()->sentence(),
            'description' => fake()->realText(),
            'price' => fake()->randomFloat(2, 5, 12),
            'image_path' => fake()->imageUrl(),
            'ingredients' => fake()->realText(),
            'grams' => fake()->numberBetween(300, 1000), 
            'calories' => fake()->numberBetween(200, 800), 
            'proteins' => fake()->numberBetween(10, 50), 
            'carbohydrates' => fake()->numberBetween(20, 100), 
            'fats' => fake()->numberBetween(5, 30), 
            'stock' => fake()->numberBetween(10, 200),
            'type_food' => fake()->randomElement(['Vegetarian', 'Vegan', 'New', 'Special', 'Classic']), // Tipo de comida
            'created_by' => 1,
            'updated_by' => 1,

        ];
    }
}
