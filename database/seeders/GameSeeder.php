<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        game::create([
            'name' => 'Natal 2014',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 2,
            'guest_id' => 1,
            'guest_color' => '#cf5902',
            'guest_score' => 5,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2014-12-24 15:00:00',
            'youtube_link' => null,
            'youtube_embed' => null,
        ]);
        game::create([
            'name' => 'Natal 2015',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 2,
            'guest_id' => 1,
            'guest_color' => '#cf5902',
            'guest_score' => 4,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2015-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/uHkkZQHuU6g?si=GrULFg9IIINF3dUy',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/uHkkZQHuU6g" title="Jogo Natal 2015" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2016',
            'home_id' => 2,
            'home_color' => '#0D0CB5',
            'home_score' => 3,
            'guest_id' => 1,
            'guest_color' => '#970303',
            'guest_score' => 3,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2016-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/U2JWxLrpw98',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/U2JWxLrpw98" title="Jogo Natal 2016" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2017',
            'home_id' => 2,
            'home_color' => '#0D0CB5',
            'home_score' => 1,
            'guest_id' => 1,
            'guest_color' => '#970303',
            'guest_score' => 3,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2017-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/b_32XD-6f0k',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/b_32XD-6f0k" title="Jogo Natal 2017 (melhores momentos)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2018',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 3,
            'guest_id' => 1,
            'guest_color' => '#970303',
            'guest_score' => 1,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2018-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/9Ujm8oeqwVQ',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/9Ujm8oeqwVQ" title="Jogo Natal 2018 (melhores momentos)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2019',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 4,
            'guest_id' => 1,
            'guest_color' => '#eabb16',
            'guest_score' => 2,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2019-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/wuXf6y5omss',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/wuXf6y5omss" title="Jogo Natal 2019 (melhores momentos)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2020',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 1,
            'guest_id' => 1,
            'guest_color' => '#eabb16',
            'guest_score' => 5,
            'local' => 'Diocesano Belo Jardim',
            'played_at' => '2020-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/eedzVZ5UE8o',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/eedzVZ5UE8o" title="Jogo Natal 2020 (melhores momentos)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2021',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 3,
            'guest_id' => 1,
            'guest_color' => '#eabb16',
            'guest_score' => 1,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2021-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/OaZ3rCsvvgk',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/OaZ3rCsvvgk" title="Jogo Natal 2021 (melhores momentos)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2022',
            'home_id' => 2,
            'home_color' => '#1c0700',
            'home_score' => 5,
            'guest_id' => 1,
            'guest_color' => '#0D0CB5',
            'guest_score' => 3,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2022-12-24 15:00:00',
            'youtube_link' => 'https://youtu.be/Rhp_eNUVVek',
            'youtube_embed' => '<iframe width="300" height="150" src="https://www.youtube.com/embed/Rhp_eNUVVek" title="Jogo Natal 2022 (Melhores momentos)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
        ]);
        game::create([
            'name' => 'Natal 2023',
            'home_id' => 2,
            'home_color' => '#c5b3bc',
            'home_score' => null,
            'guest_id' => 1,
            'guest_color' => '#1b1c31',
            'guest_score' => null,
            'local' => 'IFPE Belo Jardim',
            'played_at' => '2023-12-24 15:00:00',
            'youtube_link' => null,
            'youtube_embed' => null,
        ]);
    }

}
