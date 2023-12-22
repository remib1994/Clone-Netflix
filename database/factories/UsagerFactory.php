<?php

namespace Database\Factories;

use App\Models\Usager;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UsagerFactory extends Factory
{
    protected $model = Usager::class;

    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt($this->faker->password()),
            'nomUsager' => $this->faker->word(),
            'nom' => $this->faker->word(),
            'prenom' => $this->faker->word(),
            'role' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
