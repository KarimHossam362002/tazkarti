<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Entertainment;
use App\Models\MatchTeam;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CategorySeeder::class
        ]);
        $this->call([
            FaqSeeder::class
        ]);
        $this->call([
            ContactUsSeeder::class
        ]);
        $this->call([
            StadiumSeeder::class
        ]);
       
        $this->call([
            EntertainmentSeeder::class
        ]);
        $this->call([
            StoreSeeder::class
        ]);
        $this->call([
            TournmentSeeder::class
        ]);
        
        $this->call([
            MatcheSeeder::class
        ]);
        $this->call([
           TeamSeeder::class
        ]);
        $this->call([
           TazkaraSeeder::class
        ]);
       
        $this->call([
            UserSeeder::class
        ]);
        
    }
}
