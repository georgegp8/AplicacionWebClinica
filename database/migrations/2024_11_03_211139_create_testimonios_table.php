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
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');           // Nombre de la persona que da el testimonio
            $table->string('servicio');         // Servicio recibido, como "Cirugía de Rostro", etc.
            $table->text('testimonio');         // El testimonio o comentario
            $table->string('imagen');           // Nombre del archivo de imagen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
