<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcedimientosAdquisicionesCatalogo;

class ProcedimientosAdquisicionesCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procedimientos = [
            [
                'nombre' => 'Licitación Pública',
            ],
            [
                'nombre' => 'Licitación simplificada',
            ],
            [
                'nombre' => 'Invitación',
            ],
            [
                'nombre' => 'Enagenación',
            ],
            [
                'nombre' => 'Adjudicación directa',
            ],
            [
                'nombre' => 'Contrato',
            ],

        ];

        foreach ($procedimientos as $procedimiento) {
            ProcedimientosAdquisicionesCatalogo::create($procedimiento);
        }
    }
}
