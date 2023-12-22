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
        return $this->belongsToMany(Personne::class,'acteur_films','film_id','acteur_id');
    }

    protected $fillable = [
        'titre',
        'urlaffiche',
        'description',
        'datesortie',
        'rating',
        'genre',
        'pays',
        'univers',
        'audience',
        'realisateur_id',
        'producteur_id',
        'urltrailer'
    ];
    public function films()
    {
        return $this->hasMany(Film::class);
    }


}
