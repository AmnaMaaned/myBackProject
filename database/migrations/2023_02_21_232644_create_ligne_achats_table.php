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
        Schema::create('ligne_achats', function (Blueprint $table) {
            $table->id();
           
            $table->Integer('article_id')->unsigned();
            $table->Integer('achat_id')->unsigned();
            $table->Integer('quantite')->unsigned();
            $table->Integer('tva')->unsigned();
            $table->Integer('prix_unitaire')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_achats');
    }
};
