<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcedimientosAdquisicionesArchivos extends Model
{
    use HasFactory;
    protected $table = 'procedimientos_adquisiciones_archivos';

    protected $fillable = [
        'id',
        'nombre',
        'proceso',
        'procedimiento_id',
    ];

    public function proceso(){
        return $this->belongsTo(ProcedimientosAdquisicionesProcesos::class);
    }

    public function procedimiento()
    {
        return $this->belongsTo(ProcedimientosAdquisiciones::class);
    }


}
