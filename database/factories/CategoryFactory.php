<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'seasonality' => $this->faker->word,
            'probability_of_occurrence' => $this->faker->numberBetween(0, 100),
            'severity_level' => $this->faker->numberBetween(0, 100),
            'is_active' => $this->faker->boolean,
        ];
    }
}
