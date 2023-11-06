<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
    }
    public function producteur(){
        return $this->belongsTo(Personne::class);
    }
    public function acteurs()
    {
        return $this->belongsToMany(Personne::class);
    }

    protected $fillable = [
        'titre',
        'urlaffiche',
        'genre',
        'pays',
        'univers',
        'audience',
        'realisateur_id',
        'producteur_id',
    ];
    public function films()
    {
        return $this->hasMany(Film::class);
    }


}
