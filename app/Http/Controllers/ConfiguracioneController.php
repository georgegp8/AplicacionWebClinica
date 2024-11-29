<?php

namespace App\Http\Controllers;

use App\Models\Configuracione;
use Illuminate\Container\Attributes\Storage as AttributesStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfiguracioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configuraciones = Configuracione::all();
        return view('admin.configuraciones.index', compact('configuraciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.configuraciones.create');
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
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|regex:/^[0-9]{6,9}$/',
            'correo' => 'required|string|max:255',
            'logo' => 'required',
        ]);

        $configuracion = new Configuracione();

        $configuracion->nombre = $request->nombre;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->correo = $request->correo;
        $configuracion->logo = $request->file('logo')->store('logos', 'public'); //almacenar las imagenes en public

        $configuracion->save();

        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se registró la configuración de forma correcta ')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $configuracion = Configuracione::find($id);
        return view('admin.configuraciones.show', compact('configuracion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $configuracion = Configuracione::find($id);
        return view('admin.configuraciones.edit', compact('configuracion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //$datos = request()->all();
        //return response()->json($datos);

        //Verifica que se se este mandando la información
        //dd($request->all(), $request->file('logo')); 

        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|regex:/^[0-9]{6,9}$/',
            'correo' => 'required|string|max:255',
        ]);

        $configuracion = Configuracione::find($id);

        $configuracion->nombre = $request->nombre;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->correo = $request->correo;

        // Verificar si se subió un nuevo logo
        if ($request->hasFile('logo')) {
            // Eliminar la imagen anterior si existe
            if ($configuracion->logo) {
                $path_storage = storage_path('app/public/' . $configuracion->logo);
                if (file_exists($path_storage)) {
                    unlink($path_storage);
                }
            }

            // Subir la nueva imagen
            $imagenUpload = $request->file('logo')->store('logos', 'public');
            $configuracion->logo = $imagenUpload;
        }

        $configuracion->save();

        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se actualizó la configuración de forma correcta ')
            ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete($id)
    {
        $configuracion = Configuracione::find($id);
        return view('admin.configuraciones.delete', compact('configuracion'));
    }

    public function destroy($id)
    {
        $configuracion = Configuracione::find($id);

        // Verificar si la configuración existe y tiene un archivo asociado
        if ($configuracion && $configuracion->logo) {
            // Obtener la ruta completa del archivo
            $rutaArchivo = storage_path('app/public/' . $configuracion->logo);

            // Verificar si el archivo existe antes de eliminarlo
            if (file_exists($rutaArchivo)) {
                unlink($rutaArchivo);
            }
        }

        $configuracion->delete();


        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se eliminó la configuración de forma correcta.')
            ->with('icono', 'success');
    }
}
