<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        player::create([
            'name' => 'Jailson',
            'number' => '12',
            'goalkeeper' => true,
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Perocélio Jr',
            'number' => '92',
            'goalkeeper' => true,
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'Andriel',
            'number' => '4',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Hugo',
            'number' => '5',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Jobson',
            'number' => '8',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Perocélio',
            'number' => '10',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Gleidson',
            'number' => '20',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Boni',
            'number' => '23',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'João',
            'number' => '64',
            'team_id' => '1',
        ]);
        player::create([
            'name' => 'Artur',
            'number' => '9',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'João Pedro',
            'number' => '11',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'Helder',
            'number' => '13',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'PerbônioTT',
            'number' => '14',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'M. Nóbrega',
            'number' => '17',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'M.Tande',
            'number' => '21',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'Matheus',
            'number' => '30',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'Paulo C.',
            'number' => '99',
            'team_id' => '2',
        ]);
        player::create([
            'name' => 'Vitinho',
            'number' => '1',
            'team_id' => '2',
            'active' => false,
        ]);
        player::create([
            'name' => 'Paulinho',
            'number' => '88',
            'team_id' => '2',
            'active' => false,
        ]);
    }
}
