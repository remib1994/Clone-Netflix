<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('acteur_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acteur_id')->constrained('personnes');
            $table->foreignId('film_id')->constrained('films');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acteur_films');
    }
};
