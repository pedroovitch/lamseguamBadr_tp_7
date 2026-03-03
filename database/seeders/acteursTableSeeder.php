<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('acteurs')->insert([
            [
                'nom' => 'DiCaprio',
                'prenom' => 'Leonardo',
                'pays' => 'USA',
                'date_naissance' => '1974-11-11',
                'tel' => null
            ],
            [
                'nom' => 'Cluzet',
                'prenom' => 'François',
                'pays' => 'France',
                'date_naissance' => '1955-09-21',
                'tel' => null
            ]
        ]);
    }
}