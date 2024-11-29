<?php

namespace App\Http\Controllers;

use App\Models\Configuracione;
use App\Models\Doctor;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctores = Doctor::with('user')->get();
        return view('admin.doctores.index',compact('doctores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'nombres'=>'required|string|max:255',
            'apellidos'=>'required|string|max:255',
            'telefono' => 'required|digits:9',
            'licencia_medica' => 'required|digits:8',
            'especialidad'=>'required|string|max:40',
            'email'=>'required|max:250|unique:users',
            'password'=>'required|max:250|confirmed',
        ]);

        $usuario = new User();
        $usuario->name = $request->nombres;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $doctor = new Doctor();
        $doctor->user_id = $usuario->id;
        $doctor->nombres = $request->nombres;
        $doctor->apellidos = $request->apellidos;
        $doctor->telefono = $request->telefono;
        $doctor->licencia_medica = $request->licencia_medica;
        $doctor->especialidad = $request->especialidad;
        $doctor->save();

        $usuario->assignRole('doctor');

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se registro el doctor de forma correcta ')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctores.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctores.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $request->validate([
            'nombres'=>'required|string|max:255',
            'apellidos'=>'required|string|max:255',
            'telefono' => 'required|digits:9',
            'licencia_medica' => 'required|digits:8',
            'especialidad'=>'required|string|max:40',
            'email'=>'required|max:250|unique:users,email,'.$doctor->user->id,
            'password'=>'required|max:250|confirmed',
        ]);


        $doctor->nombres = $request->nombres;
        $doctor->apellidos = $request->apellidos;
        $doctor->telefono = $request->telefono;
        $doctor->licencia_medica = $request->licencia_medica;
        $doctor->especialidad = $request->especialidad;
        $doctor->save();

        $usuario = User::find($doctor->user->id);
        $usuario->name = $request->nombres;
        $usuario->email = $request->email;
        if ($request->filled('password')) {
            $usuario->password = Hash::make($request['password']);
        }
        $usuario->save();

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se actualizó el doctor de forma correcta ')
        ->with('icono','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete($id){
        $doctor = Doctor::findOrFail($id);
        return view('admin.doctores.delete',compact('doctor'));
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        
        //Eliminar al usuario asociado
        $user = $doctor->user;
        $user->delete();

        //Eliminar al doctor
        $doctor->delete();

        return redirect()->route('admin.doctores.index')
        ->with('mensaje','Se eliminó al doctor de forma correcta ')
        ->with('icono','success');
    }

    public function reportes(){
        return view('admin.doctores.reportes');
    }


    public function pdf()
    {
        // Recuperar la configuración de la clínica
        $configuracion = Configuracione::latest()->first();

        // Obtener todos los doctores
        $doctores = Doctor::with('user')->get();

        // Cargar la vista y generar el PDF
        $pdf = Pdf::loadView('admin.doctores.pdf', compact('configuracion', 'doctores'));

        // Retornar el PDF generado en el navegador
        return $pdf->stream('listado_doctores.pdf');
    }
}
