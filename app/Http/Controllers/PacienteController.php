<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'dni' => 'required|digits:8|unique:pacientes',
            'ruc' => 'required|digits:11|unique:pacientes',
            'fecha_nacimiento'=>'required',
            'genero'=>'required',
            'celular' => 'required|digits:9',
            'correo'=>'required|max:250|unique:pacientes',
            'direccion'=> 'required',
            'grupo_sanguineo'=>'required',
            'alergias'=>'required',
            'contacto_emergencia'=>'required',
        ]);

        $paciente = new Paciente();
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->dni = $request->dni;
        $paciente->ruc = $request->ruc;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->genero = $request->genero;
        $paciente->celular = $request->celular;
        $paciente->correo = $request->correo;
        $paciente->direccion = $request->direccion;
        $paciente->grupo_sanguineo = $request->grupo_sanguineo;
        $paciente->alergias = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;
        $paciente->observaciones = $request->observaciones;
        $paciente->save();

        return redirect()->route('admin.pacientes.index')
        ->with('mensaje','Se registró al paciente de la manera correcta')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
