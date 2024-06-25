<?php

use App\Models\Metier;
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
        Schema::create('metiers', function (Blueprint $table) {
            $table->id();   
            $table ->string('domaine');
            $table->longText('description');
            $table->string('image');
            $table->timestamps();     
        });

        Schema::table('users', function(Blueprint $table){
            $table->foreignIdFor(Metier::class)->constrained()->cascadeOnDelete();
        });
  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metiers');
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['metier_id']);
        });
        
    }
};
