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
        Schema::create('repertories', function (Blueprint $table) {
            $table->id();
            $table->string('repertory_song_name', 100);
            $table->string('repertory_author_name', 500);
            $table->text('repertory_link');
            $table->text('repertory_lyrics_link');
            $table->text('repertory_chords_link')->nullable(true);
            $table->string('repertory_tone', 10)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repertories');
    }
};
