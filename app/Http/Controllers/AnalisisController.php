<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LecturasPh;
use App\Models\LecturasCe;
use App\Models\LecturasTurbidez;
use App\Models\LecturasCalidadAgua;
use App\Services\CorelacionService;
use App\Services\RegresionService;

class AnalisisController extends Controller
{
    public function correlaciones(
        CorelacionService $correlacionService,
        RegresionService $regresionService
    ) {
        // Obtener los vectores desde la BD
        $ph = LecturasPh::pluck('valor')->toArray();
        $ce = LecturasCe::pluck('valor')->toArray();
        $turb = LecturasTurbidez::pluck('valor')->toArray();
        $calidad = LecturasCalidadAgua::pluck('valor')->toArray();

        // Calcular correlaciones
        $resultados = $correlacionService->calcular($ph, $ce, $turb);

        // ----------- REGRESIÓN LINEAL MÚLTIPLE -----------
        // Aquí defines los valores que quieres predecir
        $prediccion = $regresionService->entrenarYPredecir(
            $ph,
            $ce,
            $turb,
            $calidad,
            nuevoPh: 7.0,
            nuevoCe: 1.5,
            nuevoTurb: 4.0
        );
        // ---------------------------------------------------

        return view(
            'analisis.correlacion',
            compact('resultados', 'ph', 'ce', 'turb', 'prediccion')
        );
    }
}
