<?php

namespace App\Models;

use App\Http\Controllers\ProcedimientosAdquisicionesArchivosController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcedimientosAdquisiciones extends Model
{
    use HasFactory;

    protected $table = 'procedimientos_adquisiciones';
    protected $fillable = [
        'id',
        'numero',
        'catalogo_id',
        'descripcion',
        'fecha',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'fecha' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relación con ProcedimientoAdquisicionDetalle
    public function archivos()
    {
        return $this->hasMany(ProcedimientosAdquisicionesArchivos::class);
    }
    public function catalogo()
    {
        return $this->belongsTo(ProcedimientosAdquisicionesCatalogo::class);
    }


}
