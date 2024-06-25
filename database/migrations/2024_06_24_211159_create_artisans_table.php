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
        Schema::create('artisans', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('mot_de_passe');
            $table->string('confirmation_mdp')->nullable();
            $table->integer('numero_de_telephone');
            $table->integer('numero_whatsapp');
            $table->string('annee_experience')->nullable();
            $table->string('ville');
            $table->string('commune');
            $table->string('quartier');
            $table->string('sexe');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};
