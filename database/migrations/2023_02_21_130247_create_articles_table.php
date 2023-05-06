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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('famille');
            $table->longText('designation_article');
            $table->string('image_article')->nullable();
            $table->longText('quantite_article');
            $table->string('alert_article');
            $table->float('prix_achat_article');
            $table->float('prix_vente_article');
            $table->string('tva_article');
          
        
            $table->date('date_peremption_article');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
