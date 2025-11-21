<?php

namespace App\Services;

use Phpml\Regression\LeastSquares;

class RegresionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function entrenarYPredecir(array $ph, array $ce, array $turb, array $calidad, float $nuevoPh, float $nuevoCe, float $nuevoTurb)
    {
        // Construcción de las muestras (se crea una matríz) y será  usado para entrenar el modelo
        $samples = [];
        for ($i = 0; $i < count($ph); $i++) {
            $samples[] = [$ph[$i], $ce[$i], $turb[$i]];
        }

        // Variable dependiente: calidad real
        $targets = $calidad;

        // Modelo de regresión
        $regresion = new LeastSquares();
        $regresion->train($samples, $targets);

        // Predicción
        return $regresion->predict([$nuevoPh, $nuevoCe, $nuevoTurb]);
    }
}
