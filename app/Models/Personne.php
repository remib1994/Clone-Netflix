<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    public function filmsR()
    {
        return $this->HasMany(Film::class,'realisateur_id');
    }
    public function filmsP()
    {
        return $this->HasMany(Film::class,'producteur_id');
    }
    public function filmsA()
    {
    return $this->belongsToMany(Film::class,'acteur_films','acteur_id','film_id');
    }

}
