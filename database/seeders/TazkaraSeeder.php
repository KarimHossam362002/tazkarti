<?php

namespace Database\Seeders;

use App\Models\Tazkara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TazkaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tazkara::factory(10)->create();
    }
}
