<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{

    protected $fillable = [
        'nomc',
        'image',
        'nbProduit'
    ];

    public function produits(){
        return $this->hasMany(produits::class);
    }
}
