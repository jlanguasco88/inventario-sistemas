<?php

namespace App\Http\Controllers;

use App\Models\ModelosToners;
use Illuminate\Http\Request;

class ModelosTonersController extends Controller
{

    public function index()
    {
        $modelosToners= ModelosToners::all();
        return view('admin.modelosToners.index', compact('modelosToners'));
    }


    public function create()
    {
        return view('admin.modelosToners.create');
    }


    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|max:255',
            'activo'=> 'required|boolean'
        ]);

        // Crear un nuevo registro en la base de datos
        ModelosToners::create([
            'nombre' => $request->nombre,
            'activo' => $request->activo

        ]);

        // Redirigir a la lista de áreas con un mensaje de éxito
        return redirect()->route('modelosToners.index')->with('ModeloCreado','OK');
    }


    public function show(ModelosToners $modelos)
    {
        //
    }


    public function edit($idmodelo)
    {
        $modelosToners = ModelosToners::findOrFail($idmodelo);
        return view('admin.modelosToners.edit', compact('modelosToners'));
    }

    public function update(Request $request,$idmodelo)
    {
        $request->validate([
            'nombre' => 'required',
            'activo'=> 'required'
           
            
        ]);

        $modelo = ModelosToners::findOrFail($idmodelo);

        $modelo->update($request->all());

        return redirect()->route('modelosToners.index')->with('ModeloActualizado','OK');
    }


    public function destroy(ModelosToners $modelos)
    {
        //
    }
}
