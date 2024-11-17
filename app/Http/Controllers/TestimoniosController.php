<?php

namespace App\Http\Controllers;

use App\Models\Testimonio;
use Illuminate\Http\Request;
use App\Models\Resultado;

class TestimoniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $testimonios = Testimonio::all();
        return view('resultados.cirugias', compact( 'testimonios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'nullable|string|max:255', // Permitimos que el campo sea opcional
            'servicio' => 'required|string|max:255',
            'testimonio' => 'required|string',
            'imagen' => 'nullable|image|max:2048', // Permitimos que la imagen sea opcional
        ]);
    
        $testimonio = new Testimonio();
    
        // Si 'nombre' es null, asignamos 'Anónimo'
        $testimonio->nombre = $validatedData['nombre'] ?? 'Anónimo';
        $testimonio->servicio = $validatedData['servicio'];
        $testimonio->testimonio = $validatedData['testimonio'];
    
        // Si no se sube una imagen, asignamos la predeterminada
        if ($request->hasFile('imagen')) {
            $filePath = $request->file('imagen')->store('testimonios', 'public');
            $testimonio->imagen = basename($filePath);
        } else {
            $testimonio->imagen = 'anonimo.webp'; // Valor predeterminado
        }
    
        $testimonio->save();
    
        return redirect()->route('resultados.cirugias')
                         ->with('success', 'Testimonio creado correctamente.');
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonio $testimonio)
    {
        return view('testimonios.show', compact('testimonio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonio $testimonio)
    {
        return view('testimonios.edit', compact('testimonio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonio $testimonio)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'testimonio' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $testimonio->nombre = $validatedData['nombre'];
        $testimonio->servicio = $validatedData['servicio'];
        $testimonio->testimonio = $validatedData['testimonio'];

        if ($request->hasFile('imagen')) {
            $testimonio->imagen = $request->file('imagen')->store('testimonios', 'public');
        }

        $testimonio->save();

        return redirect()->route('testimonios.index')
                        ->with('success', 'Testimonio actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonio $testimonio)
    {
        $testimonio->delete();

        return redirect()->route('testimonios.index')
                        ->with('success', 'Testimonio eliminado correctamente.');
    }
}