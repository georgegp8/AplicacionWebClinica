<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarImagenATratamientos extends Migration
{
    public function up()
    {
        Schema::table('tratamientos', function (Blueprint $table) {
            $table->string('imagen')->nullable()->after('descripcion_larga');
        });
    }

    public function down()
    {
        Schema::table('tratamientos', function (Blueprint $table) {
            $table->dropColumn('imagen');
        });
    }
}
