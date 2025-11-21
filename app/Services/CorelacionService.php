<?php

namespace App\Services;

class CorelacionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    private function correlacion($x, $y)
    {
        $n = count($x);

        $sumX = array_sum($x);
        $sumY = array_sum($y);

        $sumXY = array_sum(array_map(fn($a, $b) => $a * $b, $x, $y));
        $sumX2 = array_sum(array_map(fn($a) => $a * $a, $x));
        $sumY2 = array_sum(array_map(fn($b) => $b * $b, $y));

        return ($n * $sumXY - ($sumX * $sumY)) /
            sqrt(($n * $sumX2 - $sumX ** 2) * ($n * $sumY2 - $sumY ** 2));
    }
    public function calcular($ph, $ce, $turb)
    {
        return [
            'ph_ce'       => $this->correlacion($ph, $ce),
            'ph_turbidez' => $this->correlacion($ph, $turb),
            'ce_turbidez' => $this->correlacion($ce, $turb),
        ];
    }
}
