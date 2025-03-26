<?php

namespace Database\Seeders;

use App\Models\PeriodosLegislativos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodosLegislativosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periodos = [
            [
                'nombre' => 'Primer Periodo de Sesiones Ordinarias',
            ],
            [
                'nombre' => 'Primer Receso',
            ],
            [
                'nombre' => 'Segundo Periodo de Sesiones Ordinarias',
            ],
            [
                'nombre' => 'Segundo Receso',
            ],
            [
                'nombre' => 'Primer Periodo Extraordinario',
            ],
            [
                'nombre' => 'Segundo Periodo Extraordinario',
            ],
            [
                'nombre' => 'Tercer Periodo Extraordinario',
            ],
            [
                'nombre' => 'Cuarto Periodo Extraordinario',
            ],
            [
                'nombre' => 'Quinto Periodo Extraordinario',
            ],
            [
                'nombre' => 'Sexto Periodo Extraordinario',
            ],
            [
                'nombre' => 'Séptimo Periodo Extraordinario',
            ],
            [
                'nombre' => 'Octavo Periodo Extraordinario',
            ],
            [
                'nombre' => 'Noveno Periodo Extraordinario',
            ],
            [
                'nombre' => 'Décimo Periodo Extraordinario',
            ],
            [
                'nombre' => 'Décimoprimer Periodo Extraordinario',
            ],
            [
                'nombre' => 'Décimosegundo Periodo Extraordinario',
            ],
            [
                'nombre' => 'Sesión Pública',
            ],
            [
                'nombre' => 'Diputación Permanente',
            ],
        ];

        foreach ($periodos as $periodo) {
            PeriodosLegislativos::create($periodo);
        }
    }
}
