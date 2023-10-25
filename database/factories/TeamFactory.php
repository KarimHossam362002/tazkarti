<?php

namespace Database\Factories;

use App\Models\Tournment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_name' =>fake()->name(),
            'team_logo' =>fake()->imageUrl(),
            'tournment_id'=>Tournment::inRandomOrder()->first()?->id,
        ];
    }
}
