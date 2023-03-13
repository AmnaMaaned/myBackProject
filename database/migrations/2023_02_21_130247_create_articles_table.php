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
            $table->string('Réf_article');
            $table->string('Famille');
            $table->longText('Designation_article');
            $table->string('Image_article')->nullable();
            $table->longText('Quantité_article');
            $table->string('Alert_article');
            $table->float('Prix_achat_article');
            $table->float('Prix_vente_article');
            $table->string('Tva_article');
          
        
            $table->date('Date_Peremption_article');
    
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
