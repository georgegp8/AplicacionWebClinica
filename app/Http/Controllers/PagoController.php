<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;


class PagoController extends Controller
{
    public function index()
    {
        // Seleccionar solo los campos requeridos
        $citas = Cita::select('nombres', 'apellidos', 'dni', 'procedimiento', 'codigo_pago', 'costo', 'estado')->get();

        // Retornar la vista con los datos
        return view('reservas.pago', compact('citas'));
    }

    public function actualizarEstadoPago($codigoPago, Request $request)
    {
        // Buscar la cita por el código de pago
        $cita = Cita::where('codigo_pago', $codigoPago)->first();

        // Verificar si la cita existe
        if (!$cita) {
            return response()->json(['error' => 'Cita no encontrada'], 404);
        }

        // Verificar si la cita ya está pagada
        if ($cita->estado === 'pagado') {
            return response()->json(['message' => 'La cita ya está pagada'], 400);
        }

        // Actualizar el estado a "pagado"
        $cita->estado = 'pagado';
        $cita->save();

        return redirect()->route('reserva.pago')->with('success', '¡Cita registrada con éxito!');
    }

}
