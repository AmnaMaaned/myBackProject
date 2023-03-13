<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_depense extends Model
{
        
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Type_depense'
    ];


    public function depense()
    {
        return $this->hasMany(Depense::class);
    }
}
