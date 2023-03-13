<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{
     
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NomComplet','Tel', 'Poste','Date_adhesion','Salaire'
    ];


    public function paiement()
    {
        return $this->hasMany(Paiement::class);
    }
}
