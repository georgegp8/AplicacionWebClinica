<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id(); // Campo ID autoincremental
            $table->string('servicio'); // Nombre del servicio
            $table->string('caso'); // Caso relacionado
            $table->text('descripcion'); // Descripción del resultado
            $table->string('antes'); // Imagen o referencia del estado "antes"
            $table->string('despues'); // Imagen o referencia del estado "después"
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
