<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lecturas_turbidez', function (Blueprint $table) {
            $table->id();
            // Valor de la turbidez (NTU)
            // Decimal con 2 decimales: ej. 12.45 NTU, 250.10 NTU
            $table->decimal('valor', 8, 2);
            // Fecha de la lectura
            $table->date('fecha');
            // Hora de la lectura
            $table->time('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturas_turbidez');
    }
};
