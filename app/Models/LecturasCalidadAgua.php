<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturasCalidadAgua extends Model
{
    protected $table = 'lecturas_calidad_agua';
    protected $fillable = [
        'valor',
        'fecha',
        'hora',
    ];
}
