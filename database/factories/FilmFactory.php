<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FilmFactory extends Factory
{
    protected $model = Film::class;

    public function definition(): array
    {
        return [
            'titre' => $this->faker->unique()->sentence(3),
            'description' => $this->faker->text(200),
            'urlaffiche' => "film".$this->faker->numberBetween(1, 10).".jpg",
            'realisateur_id' => $this->faker->numberBetween(1, 20),
            'producteur_id' => $this->faker->numberBetween(1, 20),
            'datesortie' => $this->faker->date(),
            'rating' => $this->faker->randomFloat(1, 0, 5),
            'urltrailer' => $this->faker->url(),
            'genre' => $this->faker->randomElement(['action', 'aventure', 'comédie', 'drame', 'fantastique', 'horreur', 'policier', 'science-fiction', 'thriller']),
            'univers' => $this->faker->randomElement(['DC', 'Marvel', 'Autre']),
            'audience' => $this->faker->randomElement(['TP', '10', '12', '16', '18']),
            'pays' => $this->faker->randomElement(['France', 'USA', 'UK','Canada', 'Espagne', 'Italie', 'Allemagne',
                'Japon', 'Chine', 'Corée du Sud', 'Autre']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
