<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class ComisionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutaArchivo = database_path('migrations/catComisiones.sql');

                // Verificar si el archivo existe
                if (!File::exists($rutaArchivo)) {
                    $this->command->error("El archivo $rutaArchivo no existe.");
                    return;
                }

        // Leer el contenido del archivo .sql
        $sql = File::get($rutaArchivo);

        // Ejecutar las consultas SQL
        DB::unprepared($sql);

        $comisiones = DB::table('catComisiones')->get();

                // Itero los registros y los clono en la tabla proveedores
                foreach ($comisiones as $comision) {
                    DB::table('comisiones')->insert([
                        'tipo' => $comision->tipo,
                        'nombre' => $comision->nombre,
                        'status' => $comision->status,
                        'icono' => $comision->icono,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }

                Schema::dropIfExists('catComisiones');
    }
}
