<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use App\Models\Testimonio;


class ResultadoController extends Controller
{
    public function resultadosYtestimonioC()
    {
        // Consultas para cada tipo de servicio
        $r_rino = Resultado::where('servicio', 'rinoplastia')->get();
        $r_mamo = Resultado::where('servicio', 'mamoplastia')->get();
        $r_blefa = Resultado::where('servicio', 'blefaroplastia')->get();
        $r_lift = Resultado::where('servicio', 'lifting facial')->get();
        $r_lipo = Resultado::where('servicio', 'liposuccion+lipoinjerto')->get();
        $r_lipoder = Resultado::where('servicio', 'lipodermoplastia')->get();
        $testimonios = Testimonio::all(); // Cambia $testimonio a $testimonios

        // Retornar la vista con todas las variables
        return view('resultados.cirugias', compact('r_rino', 'r_mamo', 'r_blefa', 'r_lift', 'r_lipo', 'r_lipoder', 'testimonios'));
    }
    public function resultadosYtestimonioT()
    {
        // Consultas para cada tipo de servicio
        $r_acido = Resultado::where('servicio', 'acido')->get();
        $r_botox = Resultado::where('servicio', 'botox')->get();
        $r_menton = Resultado::where('servicio', 'menton')->get();
        $r_laser = Resultado::where('servicio', 'laser')->get();
        $testimonios = Testimonio::all(); // Cambia $testimonio a $testimonios

        // Retornar la vista con todas las variables
        return view('resultados.tratamientos', compact('r_acido', 'r_botox', 'r_menton', 'r_laser', 'testimonios'));
    }
    
}
