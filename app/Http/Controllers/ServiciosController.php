<?php

namespace App\Http\Controllers;

use App\Models\Cirugia;
use App\Models\Tratamiento;
use App\Models\Mensaje_tec;
use App\Models\Testimonio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
{
    $cirugias = Cirugia::all();
    $tratamientos = Tratamiento::all();
    $mensajes = Mensaje_tec::all();
    $testimonios = Testimonio::all(); // Cambia $testimonio a $testimonios
    
    return view('in_dex.index', compact('cirugias', 'tratamientos', 'mensajes', 'testimonios'));
}
    public function viewServiciesCirugias(){
        $cirugias = Cirugia::all();
        return view('servicios.cirugias', compact('cirugias'));
    }
    public function viewServiciesTratamiento(){
        $tratamientos = Tratamiento::all();
        return view('servicios.tratamientos', compact( 'tratamientos'));
    }
    public function verTestimonios(){
        $testimonios = Testimonio::all(); // Cambia $testimonio a $testimonios
        return view('resultados.resultado', compact( 'testimonios'));
    }
}
