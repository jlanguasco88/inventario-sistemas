<?php

namespace App\Http\Controllers;

use App\Models\ModelosToners;
use App\Models\Toners;
use Illuminate\Http\Request;

class TonerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toners = Toners::with('modelos')->get(); // Cambiado a Toners en lugar de TonerController
        return view('admin.toners.index', compact('toners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modelos = ModelosToners::all();
        return view('admin.toners.create', compact('modelos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'id_modelo' => 'required',
            'stock' => 'required|integer',
            'fecha_compra' => 'required|date',
            'observaciones' => 'required|string|max:25',
        ]);

        // Crear un nuevo registro en la base de datos
        Toners::create([
            'id_modelo' => $request->id_modelo, // Cambiado a $request->Nombre para coincidir con la validación
            'stock' => $request->stock,
            'fecha_compra' => $request->fecha_compra,
            'observaciones' => $request->observaciones,
        ]);

        // Redirigir a la lista de toners con un mensaje de éxito
        return redirect()->route('toners.index')->with('TonerCreado', 'OK');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $modelos = ModelosToners::all();
        $toners = Toners::findOrFail($id);
        return view('admin.toners.edit', compact('modelos', 'toners'));
    }
    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'id_modelo' => 'required',
            'stock' => 'required|integer|min:1', // Aseguramos que el stock sea un número entero positivo
            'fecha_compra' => 'required|date',
            'observaciones' => 'nullable|string|max:255', // Se hace opcional el campo de observaciones
        ]);

        // Obtener el toner que queremos actualizar
        $toner = Toners::findOrFail($id);

        // Actualizar los valores del toner
        $toner->id_modelo = $request->id_modelo;
        $toner->stock = $request->stock;
        $toner->fecha_compra = $request->fecha_compra;
        $toner->observaciones = $request->observaciones ?? ''; // Si no hay observaciones, dejamos el campo vacío

        // Guardar los cambios en la base de datos
        $toner->save();

        // Redirigir al usuario, por ejemplo, a la lista de toners o mostrar un mensaje de éxito
        return redirect()->route('toners.index')->with('success', 'Toner actualizado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Buscar el toner por su ID
        $toner = Toners::findOrFail($id);
    
        // Eliminar el toner de la base de datos
        $toner->delete();
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('toners.index')->with('success', 'Toner eliminado correctamente.');
    }
}