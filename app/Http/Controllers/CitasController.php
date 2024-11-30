<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Cirugia;
use App\Models\Tratamiento;

class CitasController extends Controller
{
    public function index()
    {
        $cirugias = Cirugia::select('nombre', 'costo')->get();
        $tratamientos = Tratamiento::select('nombre', 'costo')->get();
    
        return view('reservas.cita', compact('cirugias', 'tratamientos'));
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
        'comentarios' => 'nullable|string',
        'codigo_pago' => 'string|size:9', // Validar que tenga exactamente 9 caracteres
        'costo' => 'numeric', // Validar que el costo sea un número
        'terminos' => 'required|boolean', // Valida que sea booleano (0 o 1).

    ]);

    // Guardar la cita en la base de datos
    Cita::create([
        'nombres' => $request->input('nombres'),
        'apellidos' => $request->input('apellidos'),
        'email' => $request->input('email'),
        'telefono' => $request->input('telefono'),
        'dni' => $request->input('dni'),
        'procedimiento' => $request->input('procedimiento'),
        'comentarios' => $request->input('comentarios'),
        'codigo_pago' => $request->input('codigo_pago'), // Extraer del formulario
        'costo' => $request->input('costo'),
        'terminos' => $request->input('terminos'),
    ]);

    return redirect()->route('reserva.cita')->with('success', '¡Cita registrada con éxito!');
}

}
