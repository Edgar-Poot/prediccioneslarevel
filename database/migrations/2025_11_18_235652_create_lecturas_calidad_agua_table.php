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
        Schema::create('lecturas_calidad_agua', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 5, 2);
            //$table->check('valor >= 0 AND valor <= 100');
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
        Schema::dropIfExists('lecturas_calidad_agua');
    }
};
