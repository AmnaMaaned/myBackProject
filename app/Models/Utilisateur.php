<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom_utilisateur', 'Type_utilisateur','Login_utilisateur','Passsword_utilisateur'
    ];
    public function Vente()
    {
        return $this->hasMany(Vente::class);
    }
 
}
