<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class WeatherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_name' => $this->faker->city,
            'recorded_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'temperature' => $this->faker->randomFloat(2, -20, 40),
            'humidity' => $this->faker->numberBetween(0, 100),
            'wind_speed' => $this->faker->randomFloat(2, 0, 100),
            'weather_description' => $this->faker->sentence,
            'pressure' => $this->faker->randomFloat(2, 800, 1200),
            'uv_index' => $this->faker->numberBetween(0, 10),
            'forecast' => $this->faker->sentence,
            'latitude' => $this->faker->numberBetween(-90, 90),
            'longitude' => $this->faker->numberBetween(-180, 180),
            'category_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
