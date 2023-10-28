<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entertainment>
 */
class EntertainmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'name' => fake()->title(),
            'title' => fake()->title(),
            'image' => fake()->imageUrl(),
            'description' => fake()->text(100),
            'location' => fake()->url(),
            'status' => rand(0,1),
        ];
    }
}
