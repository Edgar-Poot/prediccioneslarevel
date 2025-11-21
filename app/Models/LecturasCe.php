<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturasCe extends Model
{
    protected $table = 'lecturas_ce';
    protected $fillable = [
        'valor',
        'fecha',
        'hora',
    ];
}
