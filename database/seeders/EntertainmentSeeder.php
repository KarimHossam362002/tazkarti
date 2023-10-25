<?php

namespace Database\Seeders;

use App\Models\Entertainment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntertainmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entertainment::factory(10)->create();
    }
}
