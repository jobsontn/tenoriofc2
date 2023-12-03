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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->unsignedBigInteger('home_id');
            $table->string('home_color', 7);
            $table->smallInteger('home_score')->nullable();
            $table->unsignedBigInteger('guest_id');
            $table->string('guest_color', 7);
            $table->smallInteger('guest_score')->nullable();
            $table->string('local', 50);
            $table->timestamp('played_at', $precision = 0);
            $table->string('youtube_link', 100)->nullable();
            $table->text('youtube_embed')->nullable();
            $table->timestamps();
            $table->foreign('home_id')->references('id')->on('teams');
            $table->foreign('guest_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropForeign('home_id');
            $table->dropForeign('guest_id');
        });
        Schema::dropIfExists('games');
    }
};
