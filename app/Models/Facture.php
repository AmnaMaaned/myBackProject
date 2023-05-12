<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dateFacture','montantTotal', 'Nom_client'
       
    ];

    public function Vente()
    {
        return $this->belongsTo(Vente::class);
    }
}
