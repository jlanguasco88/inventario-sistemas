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
            'marca' => 'required|string|max:25',
            'modelo' => 'required|string|max:25',
            'activo'=> 'required|boolean'
        ]);

        // Crear un nuevo registro en la base de datos
        ModelosToners::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'activo' => $request->activo

        ]);

        // Redirigir a la lista de áreas con un mensaje de éxito
        return redirect()->route('modelosToners.index')->with('ModeloCreado','OK');
    }


    public function show(ModelosToners $modelos)
    {
        //
    }


    public function edit($id)
    {
        $modelo = ModelosToners::findOrFail($id); // O cualquier otro método para obtener el modelo
        return view('admin.modelosToners.edit', compact('modelo'));
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
