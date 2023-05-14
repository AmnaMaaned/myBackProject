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
        'reference','famille', 'designation_article','image_article','quantite_article', 'alert_article',
        'prix_achat_article','prix_vente_article','tva_article','date_peremption_article'
    ];

    public function Famille()
    {
        return $this->belongsTo(Famille::class);
    }
    public function achat()
    {
        return $this->belongsToMany(Achat::class);
    }
    public function vente()
    {
        return $this->belongsToMany(Vente::class);
    }

  

}
