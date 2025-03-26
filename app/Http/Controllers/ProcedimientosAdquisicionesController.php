<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProcedimientosAdquisiciones;
use App\Models\ProcedimientosAdquisicionesCatalogo;
use App\Models\ProcedimientosAdquisicionesProcesos;
use Illuminate\Support\Facades\DB;
use Exception;

class ProcedimientosAdquisicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procedimientos = ProcedimientosAdquisiciones::all();
        return view('adquisiciones/procedimientos_index',['procedimientos'=>$procedimientos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catologo = ProcedimientosAdquisicionesCatalogo::all();
        $procesos = ProcedimientosAdquisicionesProcesos::all();
        return view('adquisiciones/procedimientos_create',['catalogo'=>$catologo,'procesos'=>$procesos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $procedimiento = new ProcedimientosAdquisiciones();
            $folio = str_replace(['/', '\\'], '-', $request->ctrl_numero);
            $procedimiento->numero = $folio;
            $procedimiento->catalogo_id = $request->ctrl_procedimiento;
            $procedimiento->descripcion = $request->ctrl_descripcion;
            $procedimiento->fecha = $request->ctrl_fecha;
            $procedimiento->save();
    
            DB::commit();
    
            return response()->json([
                'success' => true,
                'message' => 'Procedimiento creado',
                'data' => [
                    'respuesta' => 1,
                    'redirect' => route('procedimientos.create')
                ]
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
    
            // Verifica si el código de error es 1062 (valor en campo no puedes ser NULL)
            if ($e->errorInfo[1] == 1048) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error en función store() del controlador ProcedimientosAdquisicionesController.</br></br> Verifique nombre de variables recibidas.</br></br>'. $e->errorInfo[2],
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
                    'message' => 'Error: en función store() del controlador ProcedimientosAdquisicionesController.</br></br>'. $e->errorInfo[2],
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
                    'message' => 'Error: Duplicidad de datos.</br> El número de procedimiento ya existe.',
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
        } catch (Exception $e) {
            DB::rollBack();
    
            // Manejo de otros errores
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
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
        $procedimiento = ProcedimientosAdquisiciones::find($id);
        $catologo = ProcedimientosAdquisicionesCatalogo::all();
        $procesos = ProcedimientosAdquisicionesProcesos::all();
        return view('adquisiciones/procedimientos_edit',['procedimiento'=>$procedimiento,'catalogo'=>$catologo,'procesos'=>$procesos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $procedimiento = ProcedimientosAdquisiciones::find($id);
            $procedimiento->numero = $request->ctrl_numero;
            $procedimiento->catalogo_id = $request->ctrl_procedimiento;
            $procedimiento->descripcion = $request->ctrl_descripcion;
            $procedimiento->fecha = $request->ctrl_fecha;
            $procedimiento->update();
    
            DB::commit();
    
            return response()->json([
                'success' => true,
                'message' => 'Procedimiento actualizado',
                'data' => [
                    'respuesta' => 1,
                    'redirect' => route('procedimientos.index')
                ]
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
    
            // Verifica si el código de error es 1062 (valor en campo no puedes ser NULL)
            if ($e->errorInfo[1] == 1048) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error en función store() del controlador ProcedimientosAdquisicionesController.</br></br> Verifique nombre de variables recibidas.</br></br>'. $e->errorInfo[2],
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
                    'message' => 'Error: en función store() del controlador ProcedimientosAdquisicionesController.</br></br>'. $e->errorInfo[2],
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
                    'message' => 'Error: Duplicidad de datos.</br> El número de procedimiento ya existe.',
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
        } catch (Exception $e) {
            DB::rollBack();
    
            // Manejo de otros errores
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'errors' => $e->getMessage(),
                'data' => [
                    'respuesta' => 0,
                    'redirect' => null
                ]
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
