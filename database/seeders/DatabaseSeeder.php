<?php

namespace Database\Seeders;

//use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FilmsTableSeeder;
use Database\Seeders\ActeursTableSeeder;
use Database\Seeders\ParticipationsTableSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        $this->call([
        FilmsTableSeeder::class,
        ActeursTableSeeder::class,
        ParticipationsTableSeeder::class
    ]);

    }
}
