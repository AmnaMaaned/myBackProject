<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneAchat extends Model
{
 
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'achat_id', 'article_id', 'quantite','tva', 'prix_unitaire'
    ];



    public function achat()
    {
        return $this->belongsTo(Achat::class);
    }
    
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }

}
