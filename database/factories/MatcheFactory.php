<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MatcheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-1 year', '+1 year');

        // Format the date using Carbon to match the "Sun 08 Oct 2023" format
        $formattedDate = Carbon::instance($date)->format('D d M Y');
        return [
            'time_number' => fake()->time('H:i', 'now'),
            'time_period' => fake()->time('A', 'now'),
            'date' => $formattedDate,
            'status' => rand(0,1),
        ];
    }
}
