<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Inserta un registro en 'eventos_trigger' para activar el trigger
        DB::table('eventos_trigger')->insertOrIgnore([
            'evento' => 'iniciar_carga' // Ajusta según el esquema de la tabla
        ]);
    }
}
