<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Structures\ArbolEventos;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionEvento;

class NotificarEventosProximos extends Command
{
    protected $signature = 'notificar:eventos';
    protected $description = 'Envía notificaciones de eventos próximos';

    public function handle()
    {
        $eventos = Event::all();
        $arbol = new ArbolEventos();

        foreach ($eventos as $evento) {
            $arbol->insertar($evento);
        }

        $eventosCercanos = $arbol->obtenerCercanos(1); // Buscar eventos dentro de 1 día

        foreach ($eventosCercanos as $evento) {
            Mail::to($evento->user->email)->send(new NotificacionEvento($evento));
            $this->info("Notificación enviada para el evento ID: {$evento->id}");
        }
    }
}
