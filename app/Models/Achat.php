<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['date_achat', 'montant_total'];

    public function article()
    {
        return $this->belongsToMany(Article::class);
    }
    
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
