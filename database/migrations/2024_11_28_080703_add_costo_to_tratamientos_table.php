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
        Schema::table('tratamientos', function (Blueprint $table) {
            $table->decimal('costo', 10, 2)->nullable()->after('descripcion_larga'); // Campo costo (10,2)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tratamientos', function (Blueprint $table) {
            $table->dropColumn('costo'); // Eliminar el campo en rollback
        });
    }
};
