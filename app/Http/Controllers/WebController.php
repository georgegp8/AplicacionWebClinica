<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Horario;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $consultorios = Consultorio::all();
        return view('web.horario', compact('consultorios'));
    }

    public function cargar_datos_consultorio($id)
    {
        $consultorio = Consultorio::find($id);
        try {
            $horarios = Horario::with('doctor', 'consultorio')->where('consultorio_id', $id)->get();
            //print_r($horarios);
            return view('web.cargar_datos_consultorio', compact('horarios','consultorio'));
        } catch (\Exception $exception) {
            return response()->json(['mensaje' => 'Error']);
        }

    }
}
