<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcedimientosAdquisiciones;
use App\Models\ProcedimientosAdquisicionesArchivos;
use App\Models\ProcedimientosAdquisicionesCatalogo;
use App\Models\ProcedimientosAdquisicionesProcesos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProcedimientosAdquisicionesArchivosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // Obtengo el procedimiento mediante el id
        $procedimiento = ProcedimientosAdquisiciones::find($id);

        // Obtengo los catálogos de procedimientos y procesos
        $catologo = ProcedimientosAdquisicionesCatalogo::all();
        $procesos = ProcedimientosAdquisicionesProcesos::all();

        // Obtengo los archivos relacionados al procedimiento
        $archivos = ProcedimientosAdquisicionesArchivos::where('procedimiento_id', $id)->get();

        return view('adquisiciones/procedimientos_archivos_create', ['procedimiento' => $procedimiento, 'catalogo' => $catologo, 'procesos' => $procesos, 'archivos' => $archivos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Voy a almacenar el archivo
            $archivo_recibido = $request->file('archivo');
            $ruta = env('STORAGE_RUTA_ADQUISICIONES') . "procedimientos/";
            $nombreArchivo = $request->procedimiento_numero . '-' . $request->procedimiento_nombre . '.pdf';
            $rutaArchivo = $ruta . "/" . $nombreArchivo;
            Storage::disk('congreso')->put($rutaArchivo, file_get_contents($archivo_recibido));

            // Voy a guardar el registro en la base de datos
            DB::beginTransaction();
            $archivo = new ProcedimientosAdquisicionesArchivos();
            $archivo->nombre = $nombreArchivo;
            $archivo->procedimiento_id = $request->procedimiento_id;
            $archivo->proceso_id = $request->proceso_id;
            $archivo->save();


            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Archivo agregado correctamente.',
                'data' => [
                    'respuesta' => 1,
                    'redirect' => route('procedimientosarchivos.create', ['id' => $request->procedimiento_id])
                ]
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();

            // Verifica si el código de error es 1062 (valor en campo no puedes ser NULL)
            if ($e->errorInfo[1] == 1048) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error en función store() del controlador ProcedimientosAdquisicionesArchivosController.</br></br> Verifique nombre de variables recibidas.</br></br>' . $e->errorInfo[2],
                    'errors' => $e->getMessage(),
                    'data' => [
                        'respuesta' => 0,
                        'redirect' => null
                    ]
                ]);
            }

            // Verifica si el código de error es 1062 (columna no encontrada)
            if ($e->errorInfo[1] == 1054) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error: en función store() del controlador ProcedimientosAdquisicionesArchivosController.</br></br>' . $e->errorInfo[2],
                    'errors' => $e->getMessage(),
                    'data' => [
                        'respuesta' => 0,
                        'redirect' => null
                    ]
                ]);
            }

            // Verifica si el código de error es 1062 (clave duplicada)
            if ($e->errorInfo[1] == 1062) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error: Duplicidad de datos.</br> El nombre de archivo ya existe.',
                    'errors' => $e->getMessage(),
                    'data' => [
                        'respuesta' => 0,
                        'redirect' => null
                    ]
                ]);
            }

            // Manejo genérico de errores de base de datos
            return response()->json([
                'success' => false,
                'message' => 'Error en la base de datos: ' . $e->getMessage(),
                'errors' => $e->getMessage(),
                'data' => [
                    'respuesta' => 0,
                    'redirect' => null
                ]
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            // Busca el archivo en la base de datos
            $archivo = ProcedimientosAdquisicionesArchivos::findOrFail($id);
            $procedimiento_id = $request->procedimiento_id;

            // Elimina el archivo del almacenamiento
            $rutaArchivo = env('STORAGE_RUTA_ADQUISICIONES') . "procedimientos/" . $archivo->nombre;
            if (Storage::disk('congreso')->exists($rutaArchivo)) {
                Storage::disk('congreso')->delete($rutaArchivo);
            }

            // Elimina el registro de la base de datos
            $archivo->delete();

            return redirect()->route('procedimientosarchivos.create', ['id' => $procedimiento_id])
                ->with('success', 'Archivo eliminado correctamente.');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el archivo: ' . $e->getMessage(),
            ]);
        }
    }

    public function pdf(string $id)
    {
        $archivo = ProcedimientosAdquisicionesArchivos::find($id);
        $urlArchivo = route('documentos.serve', ['filename' => $archivo->nombre]);

        return redirect($urlArchivo);

    }
}
