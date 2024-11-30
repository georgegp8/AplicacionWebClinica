<?php

namespace App\Structures;

class Nodo
{
    public $evento, $izquierdo, $derecho;

    public function __construct($evento)
    {
        $this->evento = $evento;
        $this->izquierdo = $this->derecho = null;
    }
}

class ArbolEventos
{
    private $raiz = null;

    // Inserta un nuevo evento en el árbol
    public function insertar($evento)
    {
        $nuevo = new Nodo($evento);
        $this->raiz ? $this->insertarNodo($this->raiz, $nuevo) : $this->raiz = $nuevo;
    }

    // Inserta el nodo en el lugar correcto basado en la cercanía a la fecha actual
    private function insertarNodo($nodo, $nuevo)
    {
        $diffNuevo = now()->diffInDays($nuevo->evento->start);
        $diffNodo = now()->diffInDays($nodo->evento->start);

        // Si el nuevo evento es más cercano, va al subárbol izquierdo
        if ($diffNuevo < $diffNodo) {
            $nodo->izquierdo ? $this->insertarNodo($nodo->izquierdo, $nuevo) : $nodo->izquierdo = $nuevo;
        } else {
            // Si el evento es más lejano o igual en cercanía, va al subárbol derecho
            $nodo->derecho ? $this->insertarNodo($nodo->derecho, $nuevo) : $nodo->derecho = $nuevo;
        }
    }

    // Obtiene eventos cercanos según el rango de días
    public function obtenerCercanos($dias = 1, $nodo = null, &$resultados = [])
    {
        if (!$nodo) $nodo = $this->raiz;

        // Recorrido en orden
        if ($nodo->izquierdo) $this->obtenerCercanos($dias, $nodo->izquierdo, $resultados);
        if (now()->diffInDays($nodo->evento->start) <= $dias) $resultados[] = $nodo->evento;
        if ($nodo->derecho) $this->obtenerCercanos($dias, $nodo->derecho, $resultados);

        return $resultados;
    }
}
