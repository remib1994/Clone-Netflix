<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->dateTime('date_naissance');
            $table->string('nationalite');
            $table->enum('sexe',['homme','femme','non-binaire']);
            $table->string('urlphoto')->nullable();
            $table->string('role');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
