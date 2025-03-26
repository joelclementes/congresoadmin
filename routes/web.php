<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcedimientosAdquisicionesController;
use App\Http\Controllers\ProcedimientosAdquisicionesArchivosController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {return view('home');})->name('home');

Route::group(['prefix' => 'procedimientos'], function () {
    Route::get('/', [ProcedimientosAdquisicionesController::class, 'index'])->name('procedimientos.index');
    Route::get('/crear', [ProcedimientosAdquisicionesController::class, 'create'])->name('procedimientos.create');
    Route::post('/store', [ProcedimientosAdquisicionesController::class, 'store'])->name('procedimientos.store');
    Route::get('/edit/{id}', [ProcedimientosAdquisicionesController::class, 'edit'])->name('procedimientos.edit');
    Route::post('/update/{id}', [ProcedimientosAdquisicionesController::class, 'update'])->name('procedimientos.update');
    Route::get('/archivos/{id}', [ProcedimientosAdquisicionesArchivosController::class, 'create'])->name('procedimientosarchivos.create');
    Route::post('/archivos/store', [ProcedimientosAdquisicionesArchivosController::class, 'store'])->name('procedimientosarchivos.store');
    Route::post('/archivos/destroy/{id}', [ProcedimientosAdquisicionesArchivosController::class, 'destroy'])->name('procedimientosarchivos.destroy');
    Route::get('/archivos/pdf/{id}', [ProcedimientosAdquisicionesArchivosController::class, 'pdf'])->name('procedimientosarchivos.pdf');
});

Route::get('/documentos/{filename}', function ($filename) {
    $path = base_path('../uploads/'.env('STORAGE_RUTA_ADQUISICIONES').'procedimientos/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    return Response::make($file, 200)->header("Content-Type", $type);
})->name('documentos.serve');

