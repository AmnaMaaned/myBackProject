<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
 
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Date','Motif','Montant'

    ];

    public function type_depense()
    {
        return $this->belongsTo(Type_depense::class);
    }

}
