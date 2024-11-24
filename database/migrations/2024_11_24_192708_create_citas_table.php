<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email');
            $table->string('telefono');
            $table->string('dni');
            $table->string('procedimiento');
            $table->text('comentarios')->nullable(); // Campo de texto adicional
            $table->boolean('terminos')->default(false); // Aceptación de términos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
