<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::create([
            'name' => 'Jailson',
            'number' => '12',
            'goalkeeper' => true,
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Perocélio Jr',
            'number' => '92',
            'goalkeeper' => true,
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'Andriel',
            'number' => '4',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Hugo',
            'number' => '5',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Jobson',
            'number' => '8',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Perocélio',
            'number' => '10',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Gleidson',
            'number' => '20',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Boni',
            'number' => '23',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'João',
            'number' => '64',
            'team_id' => '1',
        ]);
        Player::create([
            'name' => 'Artur',
            'number' => '9',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'João Pedro',
            'number' => '11',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'Helder',
            'number' => '13',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'PerbônioTT',
            'number' => '14',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'M. Nóbrega',
            'number' => '17',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'M.Tande',
            'number' => '21',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'Matheus',
            'number' => '30',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'Paulo C.',
            'number' => '99',
            'team_id' => '2',
        ]);
        Player::create([
            'name' => 'Vitinho',
            'number' => '1',
            'team_id' => '2',
            'active' => false,
        ]);
        Player::create([
            'name' => 'Paulinho',
            'number' => '88',
            'team_id' => '2',
            'active' => false,
        ]);
    }
}
