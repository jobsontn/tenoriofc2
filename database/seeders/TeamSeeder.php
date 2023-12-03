<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Experiência',
            'color' => '#1b1c31',
        ]);
        Team::create([
            'name' => 'Juventude',
            'color' => '#c5b3bc',
        ]);
    }
}
