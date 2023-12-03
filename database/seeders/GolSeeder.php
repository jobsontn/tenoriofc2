<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\gol;

class GolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ---------- Natal 2015 ---------- */
        gol::create([
            // 03:32	Perocélio	Jobson
            'game_id' => 2,
            'team_id' => 1,
            'gol_player_id' => 6,
            'assistance_player_id' => 5,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:03:32',
        ]);
        gol::create([
            // 04:22	Gleidson
            'game_id' => 2,
            'team_id' => 2,
            'gol_player_id' => 7,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:04:22',
        ]);
        gol::create([
            // 06:28	Perbônio TT	M. Nóbrega
            'game_id' => 2,
            'team_id' => 2,
            'gol_player_id' => 13,
            'assistance_player_id' => 14,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:06:28',
        ]);
        gol::create([
            // 07:13	Jobson	Hugo
            'game_id' => 2,
            'team_id' => 1,
            'gol_player_id' => 5,
            'assistance_player_id' => 4,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:07:13',
        ]);
        gol::create([
            // 08:32	Hugo	Perocélio
            'game_id' => 2,
            'team_id' => 1,
            'gol_player_id' => 4,
            'assistance_player_id' => 6,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:08:32',
        ]);
        gol::create([
            // 10:48	Andriel
            'game_id' => 2,
            'team_id' => 1,
            'gol_player_id' => 3,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:10:48',
        ]);
        /* ---------- Natal 2016 ---------- */
        gol::create([
            // 02:48	Perbônio TT
            'game_id' => 3,
            'team_id' => 2,
            'gol_player_id' => 13,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:48',
        ]);
        gol::create([
            // 03:26	M. Nóbrega	Perbônio TT
            'game_id' => 3,
            'team_id' => 2,
            'gol_player_id' => 14,
            'assistance_player_id' => 13,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:03:26',
        ]);
        gol::create([
            // 06:00	Hugo	Perocélio
            'game_id' => 3,
            'team_id' => 1,
            'gol_player_id' => 4,
            'assistance_player_id' => 6,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:06:00',
        ]);
        gol::create([
            // 06:28	Jobson
            'game_id' => 3,
            'team_id' => 1,
            'gol_player_id' => 5,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:06:28',
        ]);
        gol::create([
            // 07:49	Perbônio TT	Gleidson
            'game_id' => 3,
            'team_id' => 2,
            'gol_player_id' => 13,
            'assistance_player_id' => 7,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:07:49',
        ]);
        gol::create([
            // 09:51	Perocélio
            'game_id' => 3,
            'team_id' => 1,
            'gol_player_id' => 6,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:09:51',
        ]);
        /* ---------- Natal 2017 ---------- */
        gol::create([
            // 02:25	Tande	Paulo C.
            'game_id' => 4,
            'team_id' => 2,
            'gol_player_id' => 15,
            'assistance_player_id' => 17,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:25',
        ]);
        gol::create([
            // 03:37	Andriel	Jailson
            'game_id' => 4,
            'team_id' => 1,
            'gol_player_id' => 3,
            'assistance_player_id' => 1,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:03:37',
        ]);
        gol::create([
            // 05:25	Hugo
            'game_id' => 4,
            'team_id' => 1,
            'gol_player_id' => 4,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:05:25',
        ]);
        gol::create([
            // 08:07	Perocélio	Andriel
            'game_id' => 4,
            'team_id' => 1,
            'gol_player_id' => 6,
            'assistance_player_id' => 3,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:08:07',
        ]);
        /* ---------- Natal 2018 ---------- */
        gol::create([
            // 03:48	M. Nóbrega	Perbônio TT
            'game_id' => 5,
            'team_id' => 2,
            'gol_player_id' => 14,
            'assistance_player_id' => 13,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:03:48',
        ]);
        gol::create([
            // 05:03	Tande	Paulo C.
            'game_id' => 5,
            'team_id' => 2,
            'gol_player_id' => 15,
            'assistance_player_id' => 17,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:05:03',
        ]);
        gol::create([
            // 05:49	Gleidson
            'game_id' => 5,
            'team_id' => 2,
            'gol_player_id' => 7,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:05:49',
        ]);
        gol::create([
            // 06:19	Jobson	Andriel
            'game_id' => 5,
            'team_id' => 1,
            'gol_player_id' => 5,
            'assistance_player_id' => 3,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:06:19',
        ]);
        /* ---------- Natal 2019 ---------- */
        gol::create([
            // 01:46	Perbônio TT	Helder
            'game_id' => 6,
            'team_id' => 2,
            'gol_player_id' => 13,
            'assistance_player_id' => 12,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:01:46',
        ]);
        gol::create([
            // 03:37	Hugo	Perocélio
            'game_id' => 6,
            'team_id' => 1,
            'gol_player_id' => 4,
            'assistance_player_id' => 6,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:03:37',
        ]);
        gol::create([
            // 04:47	Gleidson	Andriel
            'game_id' => 6,
            'team_id' => 1,
            'gol_player_id' => 7,
            'assistance_player_id' => 3,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:04:47',
        ]);
        gol::create([
            // 05:09	Vitinho	Artur
            'game_id' => 6,
            'team_id' => 1,
            'gol_player_id' => 18,
            'assistance_player_id' => 10,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:05:09',
        ]);
        gol::create([
            // 08:34	Perbônio TT
            'game_id' => 6,
            'team_id' => 1,
            'gol_player_id' => 13,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:08:34',
        ]);
        gol::create([
            // 09:02	Perbônio TT	Artur
            'game_id' => 6,
            'team_id' => 1,
            'gol_player_id' => 13,
            'assistance_player_id' => 10,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:09:02',
        ]);
        /* ---------- Natal 2020 ---------- */
        gol::create([
            // 01:32	Andriel	Gleidson
            'game_id' => 7,
            'team_id' => 1,
            'gol_player_id' => 3,
            'assistance_player_id' => 7,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:01:32',
        ]);
        gol::create([
            // 02:44	Gleidson	Andriel
            'game_id' => 7,
            'team_id' => 1,
            'gol_player_id' => 7,
            'assistance_player_id' => 3,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:44',
        ]);
        gol::create([
            // 05:17	Perbônio TT	Helder
            'game_id' => 7,
            'team_id' => 2,
            'gol_player_id' => 13,
            'assistance_player_id' => 12,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:05:17',
        ]);
        gol::create([
            // 06:22	Gleidson	Andriel
            'game_id' => 7,
            'team_id' => 1,
            'gol_player_id' => 7,
            'assistance_player_id' => 3,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:05:17',
        ]);
        gol::create([
            // 08:22	João	Hugo
            'game_id' => 7,
            'team_id' => 1,
            'gol_player_id' => 9,
            'assistance_player_id' => 4,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:08:22',
        ]);
        gol::create([
            // 11:34	Gleidson
            'game_id' => 7,
            'team_id' => 1,
            'gol_player_id' => 7,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:11:34',
        ]);
        /* ---------- Natal 2021 ---------- */
        gol::create([
            // 01:32	Perbônio TT	Paulo C.
            'game_id' => 8,
            'team_id' => 2,
            'gol_player_id' => 13,
            'assistance_player_id' => 17,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:01:32',
        ]);
        gol::create([
            // 02:01	Tande	Paulo C.
            'game_id' => 8,
            'team_id' => 2,
            'gol_player_id' => 15,
            'assistance_player_id' => 17,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:01',
        ]);
        gol::create([
            // 02:27	Perocélio	Jobson
            'game_id' => 8,
            'team_id' => 2,
            'gol_player_id' => 6,
            'assistance_player_id' => 5,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:27',
        ]);
        gol::create([
            // 03:17	Artur	Paulo C.
            'game_id' => 8,
            'team_id' => 2,
            'gol_player_id' => 10,
            'assistance_player_id' => 17,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:03:17',
        ]);
        /* ---------- Natal 2022 ---------- */
        gol::create([
            // 02:13	Tande	Artur
            'game_id' => 9,
            'team_id' => 2,
            'gol_player_id' => 15,
            'assistance_player_id' => 10,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:13',
        ]);
        gol::create([
            // 02:32	Tande	Perbônio TT
            'game_id' => 9,
            'team_id' => 2,
            'gol_player_id' => 15,
            'assistance_player_id' => 13,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:02:13',
        ]);
        gol::create([
            // 04:56	Gleidson	Perocélio
            'game_id' => 9,
            'team_id' => 1,
            'gol_player_id' => 7,
            'assistance_player_id' => 6,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:04:56',
        ]);
        gol::create([
            // 05:44	Artur	Tande
            'game_id' => 9,
            'team_id' => 2,
            'gol_player_id' => 10,
            'assistance_player_id' => 15,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:04:56',
        ]);
        gol::create([
            // 06:30	Gleidson	João
            'game_id' => 9,
            'team_id' => 1,
            'gol_player_id' => 7,
            'assistance_player_id' => 9,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:06:30',
        ]);
        gol::create([
            // 06:56	Tande	Paulo C.
            'game_id' => 9,
            'team_id' => 2,
            'gol_player_id' => 15,
            'assistance_player_id' => 17,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:06:56',
        ]);
        gol::create([
            // 08:03	Paulo C.
            'game_id' => 9,
            'team_id' => 2,
            'gol_player_id' => 17,
            'assistance_player_id' => null,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:08:03',
        ]);
        gol::create([
            // 09:48	Jobson	Gleidson
            'game_id' => 9,
            'team_id' => 1,
            'gol_player_id' => 5,
            'assistance_player_id' => 7,
            'game_time' => null,
            'video_time' => null,
            'resume_time' => '00:08:03',
        ]);
        /* ---------- Natal 2023 ---------- */
        /*

         */
    }
}
