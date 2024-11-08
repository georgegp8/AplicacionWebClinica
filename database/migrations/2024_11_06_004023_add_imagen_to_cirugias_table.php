<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagenToCirugiasTable extends Migration
{
    public function up()
    {
        Schema::table('cirugias', function (Blueprint $table) {
            $table->string('imagen')->nullable()->after('descripcion_larga');
        });
    }

    public function down()
    {
        Schema::table('cirugias', function (Blueprint $table) {
            $table->dropColumn('imagen');
        });
    }
}
