<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CatLegislaturasSeeder::class);
        $this->call(EjerciciosLegislativosSeeder::class);
        $this->call(PeriodosLegislativosSeeder::class);
        $this->call(ComisionesSeeder::class);
        $this->call(ProcedimientosAdquisicionesCatalogoSeeder::class);
        $this->call(ProcedimientosAdquisicionesProcesosSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
