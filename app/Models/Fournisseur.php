<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom_F','Tel_F', 'Email_F','adresse_F'
    ];


    public function achat()
    {
        return $this->hasMany(Achat::class);
    }

}
