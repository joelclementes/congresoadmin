<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\EjercicioLegislativo;

class EjerciciosLegislativosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ejercicios = [
            [
                'nombre' => 'Primer año de ejercicio',
            ],
            [
                'nombre' => 'Segundo año de ejercicio',
            ],
            [
                'nombre' => 'Tercer año de ejercicio',
            ],
            [
                'nombre' => 'Cuarto año de ejercicio',
            ],
        ];

        foreach ($ejercicios as $ejercicio) {
            EjercicioLegislativo::create($ejercicio);
        }
    }
}
