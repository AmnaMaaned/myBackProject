<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lignevente extends Model
{
    use HasFactory;
     
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'vente_id', 'article_id', 'quantite','TVAVente', 'Prix_HTVente'
    ];

}
