<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::limit($this->faker->name, 23), // maksimal 24 karakter
            'desc' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'currentBudget' => $this->faker->numberBetween(500, 5000),
            'monthlyIncome' => $this->faker->numberBetween(1000, 5000),
        ];
    }
}
