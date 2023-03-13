<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
  
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Montant','Date_paie'

    ];

    public function employeur()
    {
        return $this->belongsTo(Employeur::class);
    }

}
