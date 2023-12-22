<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->string('urlaffiche');
            $table->foreignId('realisateur_id')->constrained('personnes');
            $table->foreignId('producteur_id')->constrained('personnes');
            $table->date('datesortie');
            $table->float('rating');
            $table->string('urltrailer');
            $table->string('genre');
            $table->string('univers');
            $table->string('audience');
            $table->string('pays');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
