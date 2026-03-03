<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmstableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'titre' => 'Inception',
                'pays' => 'USA',
                'annee' => 2010,
                'duree' => '02:28:00',
                'genre' => 'Science-fiction'
            ],
            [
                'titre' => 'Intouchables',
                'pays' => 'France',
                'annee' => 2011,
                'duree' => '01:52:00',
                'genre' => 'Comedie'
            ]
        ]);
    }
}