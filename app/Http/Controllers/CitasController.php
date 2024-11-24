<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasController extends Controller
{
    public function index()
    {
        return view('reservas.cita'); // Asegúrate de que esta vista existe
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|regex:/^9\d{2} \d{3} \d{3}$/',
            'dni' => 'required|digits:8',
            'procedimiento' => 'required|string',
            'comentarios' => 'string',
            'terminos' => 'accepted',
        ]);

        // Guardar la cita en la base de datos
        Cita::create($request->all());

        return redirect()->route('reserva.cita')->with('success', '¡Cita registrada con éxito!');
    }
}
