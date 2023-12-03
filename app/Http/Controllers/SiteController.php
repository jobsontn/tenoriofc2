<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\player;
use App\Models\game;

class SiteController extends Controller
{
    public function index()
    {

        $sql_gols = "
            SELECT g.gol_player_id as id, p.name, COUNT(g.id) as gols, MIN(g.id) as min_id
            FROM `gols` g, `players` p
            WHERE g.gol_player_id = p.id
            GROUP BY g.gol_player_id, p.name
            ORDER BY COUNT(g.id) DESC, MIN(g.id) ASC
            ";
        $sql_assists = "
            SELECT g.assistance_player_id, p.name, COUNT(g.id) as assists, MIN(g.id) as min_id
            FROM `gols` g, `players` p
            WHERE g.assistance_player_id = p.id
            GROUP BY g.assistance_player_id, p.name
            ORDER BY COUNT(g.id) DESC, MIN(g.id) ASC
            ";

        $func = function($dir){
            $func_urls = function($file){
                $url = Storage::url($file);
                return $url;
            };
            //$url = Storage::url($dir);
            $newobj = new \stdClass();//create a new
            $newobj->name = basename($dir);
            $newobj->pictures = array_map($func_urls, Storage::files($dir));
            return $newobj;
        };

        $directories = Storage::directories('public/fotos');
        $galleries = array_map($func, $directories);

        //dd($galleries);

        $players1 = player::where('active', 1)->where('team_id', 2)->get();
        $players2 = player::where('active', 1)->where('team_id', 1)->get();
        $gols = DB::select($sql_gols);
        $assists = DB::select($sql_assists);
        $games = game::whereNotNull('home_score')->whereNotNull('guest_score')->orderByDesc('played_at')->get();
        $nextGame = game::whereNull('home_score')->whereNull('guest_score')->orderByDesc('played_at')->first();
        $videos = game::whereNotNull('youtube_embed')->orderByDesc('played_at')->get();

        return view('welcome', compact('players1', 'players2', 'gols', 'assists', 'games', 'galleries', 'videos', 'nextGame'));
    }
}
