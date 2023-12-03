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
        Schema::create('lineups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('player_id');
            $table->string('number', 3);
            $table->timestamps();
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lineups', function (Blueprint $table) {
            $table->dropForeign('game_id');
            $table->dropForeign('team_id');
            $table->dropForeign('player_id');
        });
        Schema::dropIfExists('lineups');
    }
};
