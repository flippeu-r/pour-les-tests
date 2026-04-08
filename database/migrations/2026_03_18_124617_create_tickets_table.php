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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->text('description');
            $table->string('type'); 
            $table->string('priorite'); 
            $table->decimal('estimation', 8, 2)->nullable(); 
            $table->string('statut')->default('Nouveau');
            
            // C'est ici qu'on relie le ticket au projet et à la table 'users' de Laravel !
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
