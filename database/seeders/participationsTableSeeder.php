<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipationsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('participations')->insert([
            [
                'films_id' => 1,
                'acteurs_id' => 1,
                'role' => 'Cobb',
                'typeRole' => 'principal'
            ],
            [
                'films_id' => 2,
                'acteurs_id' => 2,
                'role' => 'Philippe',
                'typeRole' => 'principal'
            ]
        ]);
    }
}