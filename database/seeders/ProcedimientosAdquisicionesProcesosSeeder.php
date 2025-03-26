<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcedimientosAdquisicionesProcesos;

class ProcedimientosAdquisicionesProcesosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procesos = [
            [
                'nombre' => 'Invitación',
            ],
            [
                'nombre' => 'Instrucción',
            ],
            [
                'nombre' => 'Bases',
            ],
            [
                'nombre' => 'Apertura',
            ],
            [
                'nombre' => 'Dictamen',
            ],
        ];

        foreach ($procesos as $proceso) {
            ProcedimientosAdquisicionesProcesos::create($proceso);
        }
    }
}
