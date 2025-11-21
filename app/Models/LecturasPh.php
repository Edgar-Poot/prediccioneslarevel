<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturasPh extends Model
{
    protected $table = 'lecturas_ph';
    // Campos que se pueden llenar
    protected $fillable = [
        'valor',
        'fecha',
        'hora',
    ];
}