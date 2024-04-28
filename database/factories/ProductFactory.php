<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productName' => fake()->unique()->jobTitle(),
            'category_id' => Category::all()->random()->id,
            'description' => fake()->realText(),
            'price' => fake()->numberBetween(0, 1000),
            'quantity' => fake()->numberBetween(0, 100),
            'image' => fake()->imageUrl(),
        ];
    }
}
