<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'urlphoto',
        'nationalite',
        'role',
    ];
    public function films()
    {
        return $this->belongsToMany(Film::class,'acteur_films','acteur_id','film_id');
    }
    public function filmsR()
    {
        return $this->hasMany(Film::class,'realisateur_id');
    }
    public function filmsP()
    {
        return $this->hasMany(Film::class,'producteur_id');
    }

}
