<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('playlists', function (Blueprint $table) {
            if (!Schema::hasColumn('playlists', 'genre')) {
                $table->string('genre')->nullable();
            }
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->unsignedBigInteger('playlist_id')->nullable();
            $table->foreign('playlist_id')->references('id')->on('playlists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('playlists', function (Blueprint $table) {
            $table->dropColumn('genre');
        });
    }
}