<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'datevente','totalvente'
    ];
    public function article()
    {
        return $this->belongsToMany(Article::class);
    }
    public function Facture()
    {
        return $this->hasMany(Facture::class);
    }
    public function Utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
