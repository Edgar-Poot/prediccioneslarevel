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
        Schema::create('lecturas_ph', function (Blueprint $table) {
            $table->id();
            // Valor del pH (puede ser decimal, por ejemplo 0–14 con dos decimales)
            $table->decimal('valor', 4, 2);
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
        Schema::dropIfExists('lecturas_ph');
    }
};
