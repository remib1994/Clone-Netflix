<?php

namespace Database\Factories;

use App\Models\acteur_film;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class acteur_filmFactory extends Factory
{
    protected $model = acteur_film::class;

    public function definition(): array
    {
        return [
            'acteur_id' => $this->faker->numberBetween(1, 20),
            'film_id' => $this->faker->numberBetween(1, 20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
