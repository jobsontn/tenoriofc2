<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('gol_player_id')->nullable();
            $table->unsignedBigInteger('assistance_player_id')->nullable();
            $table->time('game_time', $precision = 0)->nullable();
            $table->time('video_time', $precision = 0)->nullable();
            $table->time('resume_time', $precision = 0)->nullable();
            $table->timestamps();
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('gol_player_id')->references('id')->on('players');
            $table->foreign('assistance_player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gols', function (Blueprint $table) {
            $table->dropForeign('game_id');
            $table->dropForeign('team_id');
            $table->dropForeign('gol_player_id');
            $table->dropForeign('assistance_player_id');
        });
        Schema::dropIfExists('gols');
    }
};
