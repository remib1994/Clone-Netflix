<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class usagersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'nomUsager' => 'admin',
                'nom' => 'Bob',
                'prenom' => 'Bobbah',
                'role' => 'admin',
            ],
            [
              'email' => 'normal@gmail.com',
                'password' => Hash::make('normal'),
                'nomUsager' => 'normal',
                'nom' => 'Bob2',
                'prenom' => 'Bobbah2',
                'role' => 'normal',
            ],
            [
                'email' => 'enfant@gmail.com',
                'password' => Hash::make('enfant'),
                'nomUsager' => 'enfant',
                'nom' => 'Bob3',
                'prenom' => 'Bobbah3',
                'role' => 'enfant',
            ]
        ]
        );

    }
}
