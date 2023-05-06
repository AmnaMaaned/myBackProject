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
        'nom_utilisateur', 'type_utilisateur','login_utilisateur','passsword_utilisateur'
    ];
    public function Vente()
    {
        return $this->hasMany(Vente::class);
    }
    public function Type_utilisateur()
    {
        return $this->hasMany(Type_utilisateur::class);
    }
}
