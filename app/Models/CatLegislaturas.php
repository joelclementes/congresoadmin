<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatLegislaturas extends Model
{
    use HasFactory;
    protected $table = 'catlegislaturas';

    protected $fillable = [
        'clave',
        'nombre',
        'claveromano',
        'inicia',
        'termina',
        'activa'
    ];

    protected $casts = [
        'fecha_renovacion' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function numaxos()
    {
        return $this->termina - $this->termina;
    }
}
