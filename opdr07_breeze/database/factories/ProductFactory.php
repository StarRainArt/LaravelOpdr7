<?php

namespace Database\Factories;

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
            "code" => fake()->ean13(),
            "name" => fake()->word(),
            "quantity" => fake()->numberBetween(1, 100),
            "price" => fake()->randomFloat(2, 0.01, 999999.99),
            "description" => fake()->sentence(),
        ];
    }
}
