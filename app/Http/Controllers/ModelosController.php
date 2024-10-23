<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\Http\Request;

class ModelosController extends Controller
{

    public function index()
    {
        $modelos= Modelos::all();
        return view('admin.modelos.index', compact('modelos'));
    }


    public function create()
    {
        return view('admin.modelos.create');
    }


    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'activo'=> 'required|boolean'
        ]);

        // Crear un nuevo registro en la base de datos
        Modelos::create([
            'nombre' => $request->nombre,
            'activo' => $request->activo

        ]);

        // Redirigir a la lista de áreas con un mensaje de éxito
        return redirect()->route('modelos.index')->with('ModeloCreado','OK');
    }


    public function show(Modelos $modelos)
    {
        //
    }


    public function edit($idmodelo)
    {
        $modelo = Modelos::findOrFail($idmodelo);
        return view('admin.modelos.edit', compact('modelo'));
    }

    public function update(Request $request,$idmodelo)
    {
        $request->validate([
            'nombre' => 'required',
            'activo'=> 'required'
           
            
        ]);

        $modelo = Modelos::findOrFail($idmodelo);

        $modelo->update($request->all());

        return redirect()->route('modelos.index');
    }


    public function destroy(Modelos $modelos)
    {
        //
    }
}
