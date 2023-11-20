<?php

namespace Database\Factories;

use App\Models\Personne;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PersonneFactory extends Factory
{
    protected $model = Personne::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'date_naissance' => $this->faker->dateTime(),
            'nationalite' => $this->faker->randomElement(['France', 'USA', 'UK','Canada', 'Espagne', 'Italie', 'Allemagne',
                'Japon', 'Chine', 'Corée du Sud', 'Autre']),
            'sexe' => $this->faker->randomElement(['homme','femme','non-binaire']),
            'urlphoto' => $this->faker->imageUrl(640, 480, 'animals', true),
            'role' => $this->faker->randomElement(['acteur', 'réalisateur', 'producteur',]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
