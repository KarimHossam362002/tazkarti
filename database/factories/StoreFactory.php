<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Entertainment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'outlet_name' => fake()->name(),
            'city' => fake()->city(),
            'district' => fake()->city(),
            'address' => fake()->address(),
            'status' => rand(0,1),
            'dedicated_to' => rand(0,1),
            
        ];
    }
}
