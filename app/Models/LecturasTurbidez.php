<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturasTurbidez extends Model
{
    protected $table = 'lecturas_turbidez';
    protected $fillable = [
        'valor',
        'fecha',
        'hora',
    ];
}
