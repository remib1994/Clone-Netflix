<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('usagers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('nomUsager',25);
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->enum('role',['admin','normal','enfant']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
