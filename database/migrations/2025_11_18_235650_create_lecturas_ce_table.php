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
        Schema::create('lecturas_ce', function (Blueprint $table) {
            $table->id();
            // Valor de Conductividad Eléctrica (CE) en mS/cm o µS/cm
            // Se usa decimal para permitir valores con decimales.
            $table->decimal('valor', 8, 3); // Ejemplo: 1234.567
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
        Schema::dropIfExists('lecturas_ce');
    }
};
