<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Réf_article','Famille', 'Designation_article','Image_article','Quantité_article', 'Alert_article',
        'Prix_achat_article','Prix_vente_article','Tva_article','Date_Peremption_article'
    ];

    public function Famille()
    {
        return $this->belongsTo(Famille::class);
    }
    public function ligneachat()
    {
        return $this->hasMany(LigneAchat::class);
    }


  

}
