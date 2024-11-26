<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Horario;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        /*         try {
            $horarios = Horario::with('doctor', 'consultorio')->where('consultorio_id', $id)->get();
            //print_r($horarios);
            return view('admin.horarios.cargar_datos_consultorio', compact('horarios'));
        } catch (\Exception $exception) {
            return response()->json(['mensaje' => 'Error']);
        } */
        $consultorios = Consultorio::all();
        return view('web.horario', compact('consultorios'));
    }
}
