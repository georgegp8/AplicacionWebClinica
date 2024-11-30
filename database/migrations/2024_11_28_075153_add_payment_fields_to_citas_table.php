<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentFieldsToCitasTable extends Migration
{
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->string('codigo_pago')->nullable()->after('comentarios'); // Código de pago (puede ser nulo inicialmente)
            $table->decimal('costo', 10, 2)->nullable()->after('codigo_pago'); // Monto con formato 10,2
            $table->enum('estado', ['Pendiente', 'Pagado'])->default('Pendiente')->after('costo'); // Estado de pago
        });
    }

    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->dropColumn(['codigo_pago', 'monto', 'estado']); // Elimina los campos en caso de revertir la migración
        });
    }
}
