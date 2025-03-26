<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comparecencias extends Model
{
    use HasFactory;
    protected $table = 'comparecencias';

    protected $fillable = [
        'id',
        'fecha',
        'comparecencia',
        'hora',
    ];
}
