<?php

namespace App\Http\Controllers;
use App\Models\Modelos;
use App\Models\Impresoras;
use App\Models\ModelosImpresoras;
use Illuminate\Http\Request;

class ImpresorasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $impresoras = Impresoras::with('modelos')->get();
        return view('admin.impresoras.index',compact('impresoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modelos= ModelosImpresoras::all();
        return view('admin.impresoras.create',compact('modelos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'id_modelo'=> 'required',
            'orden'=> 'required',
        ]);

        // Crear un nuevo registro en la base de datos
        Impresoras::create([
            'descripcion' => $request->descripcion,
            'id_modelo'=> $request->id_modelo,
            'orden'=> $request->orden,
            'ubicacion'=>$request->ubicacion,
        ]);

        // Redirigir a la lista de áreas con un mensaje de éxito
        return redirect()->route('impresoras.index')->with('ImpresoraCreado','OK');
    }

    /**
     * Display the specified resource.
     */
    public function show(Impresoras $impresoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Impresoras $impresoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impresoras $impresoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impresoras $impresoras)
    {
        //
    }
}
