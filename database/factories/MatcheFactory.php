<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Stadium;
use App\Models\Team;
use App\Models\Tournment;
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
            "tournment_id" => Tournment::inRandomOrder()->first()?->id,
            "stadium_id" => Stadium::inRandomOrder()->first()?->id,
            'status' => rand(0,1),
        ];
    }
}
