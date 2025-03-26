<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CatLegislaturas;

class CatLegislaturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $legislaturas = [
            [
                'clave' => '58',
                'nombre' => 'LXIII LEGISLATURA',
                'claveromano' => 'LXIII',
                'inicia' => 1997,
                'termina' => 2000,
                'activa' => 0,
            ],
            [
                'clave' => '59',
                'nombre' => 'LXIX LEGISLATURA',
                'claveromano' => 'LXIX',
                'inicia' => 2000,
                'termina' => 2004,
                'activa' => 0,
            ],
            [
                'Clave' => '60',
                'nombre' => 'LX LEGISLATURA',
                'claveromano' => 'LX',
                'inicia' => 2004,
                'termina' => 2007,
                'activa' => 0,
            ],[
                'Clave' => '61',
                'nombre' => 'LXI LEGISLATURA',
                'claveromano' => 'LXI',
                'inicia' => 2007,
                'termina' => 2010,
                'activa' => 0,
            ],[
                'Clave' => '62',
                'nombre' => 'LXII LEGISLATURA',
                'claveromano' => 'LXII',
                'inicia' => 2010,
                'termina' => 2013,
                'activa' => 0,
            ],[
                'Clave' => '63',
                'nombre' => 'LXIII LEGISLATURA',
                'claveromano' => 'LXIII',
                'inicia' => 2013,
                'termina' => 2016,
                'activa' => 0,
            ],[
                'Clave' => '64',
                'nombre' => 'LXIV LEGISLATURA',
                'claveromano' => 'LXIV',
                'inicia' => 2016,
                'termina' => 2018,
                'activa' => 0,
            ],[
                'Clave' => '65',
                'nombre' => 'LXV LEGISLATURA',
                'claveromano' => 'LXV',
                'inicia' => 2018,
                'termina' => 2021,
                'activa' => 0,
            ],[
                'Clave' => '66',
                'nombre' => 'LXVI LEGISLATURA',
                'claveromano' => 'LXVI',
                'inicia' => 2021,
                'termina' => 2024,
                'activa' => 0,
            ],[
                'Clave' => '67',
                'nombre' => 'LXVII LEGISLATURA',
                'claveromano' => 'LXVII',
                'inicia' => 2024,
                'termina' => 2027,
                'activa' => 1,
            ]
        ];

        foreach ($legislaturas as $legislatura) {
            CatLegislaturas::create($legislatura);
        }

    }
}
