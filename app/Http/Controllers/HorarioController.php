<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Doctor;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Esta relacionado con dos tablas : doctor y consultorio
        $horarios = Horario::with('doctor','consultorio')->get();
        $consultorios = Consultorio::all();
        return view('admin.horarios.index',compact('horarios','consultorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor','consultorio')->get();
        return view('admin.horarios.create',compact('doctores','consultorios','horarios'));
    }

    public function cargar_datos_consultorio($id){
        //echo "Respuestas desde el controlador ".$id;
        try {
            $horarios = Horario::with('doctor','consultorio')->where('consultorio_id',$id)->get();
            //print_r($horarios);
            return view('admin.horarios.cargar_datos_consultorio',compact('horarios'));
        } catch (\Exception $exception) {
            return response()->json(['mensaje'=> 'Error']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);

        // Validar los datos del formulario
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_final' => 'required|date_format:H:i|after:hora_inicio',
        ]);

        // Verificar si el horario ya existe para ese día y rango de horas
        $horarioExistente = Horario::where('dia', $request->dia)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                        ->where('hora_inicio', '<', $request->hora_final);
                })->orWhere(function ($query) use ($request) {
                    $query->where('hora_final', '>', $request->hora_inicio)
                        ->where('hora_final', '<=', $request->hora_final);
                })->orWhere(function ($query) use ($request) {
                    $query->where('hora_inicio', '<', $request->hora_inicio)
                        ->where('hora_final', '>', $request->hora_final);
                });
            })
            ->exists();

        //
        if ($horarioExistente) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que se superpone con el horario ingresado')
                ->with('icono', 'error');
        }


        Horario::create($request->all());

        return redirect()->route('admin.horarios.index')
        ->with('mensaje','Se registró el horario de forma correcta ')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $horario = Horario::find($id);
        return view('admin.horarios.show',compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
