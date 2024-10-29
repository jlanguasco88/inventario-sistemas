<?php

namespace App\Http\Controllers;

use App\Models\ModelosImpresoras;
use Illuminate\Http\Request;

class ModelosImpresorasController extends Controller
{

    public function index()
    {
        $modelosImpresoras= ModelosImpresoras::all();
        return view('admin.modelosImpresoras.index', compact('modelosImpresoras'));
    }


    public function create()
    {
        return view('admin.modelosImpresoras.create');
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
        ModelosImpresoras::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'activo' => $request->activo

        ]);

        // Redirigir a la lista de áreas con un mensaje de éxito
        return redirect()->route('modelosImpresoras.index')->with('ModeloCreado','OK');
    }


    public function show(ModelosImpresoras $modelos)
    {
        //
    }


    public function edit($idmodelo)
    {
        $modelosToners = ModelosImpresoras::findOrFail($idmodelo);
        return view('admin.modelosToners.edit', compact('modelosToners'));
    }

    public function update(Request $request,$idmodelo)
    {
        $request->validate([
            'marca' => 'required',
            'activo'=> 'required'
           
            
        ]);

        $modelosToners = ModelosImpresoras::findOrFail($idmodelo);

        $modelosToners->update($request->all());

        return redirect()->route('modelosToners.index')->with('ModeloActualizado','OK');
    }


    public function destroy(ModelosImpresoras $modelos)
    {
        //
    }
}
