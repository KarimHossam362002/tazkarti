<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Entertainment;
use App\Models\Matche;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TazkaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'tazkara'=>fake()->numberBetween(10000000000000,10000000000010),
            "match_id" => Matche::inRandomOrder()->first()?->id,
            "entertainment_id" => Entertainment::inRandomOrder()->first()?->id,

        ];
    }
}
