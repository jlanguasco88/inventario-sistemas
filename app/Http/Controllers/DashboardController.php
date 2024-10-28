<?php

namespace App\Http\Controllers;

use App\Models\Toners;
use App\Models\Impresoras;

class DashboardController extends Controller
{
    public function index()
    {
        // Calcula el total de stock de todos los tóneres
        $totalStockToners = Toners::sum('stock');
        // Calcula la cantidad de impresoras activas (ajusta la condición a tu columna de estado)
        $totalImpresorasActivas = Impresoras::where('activo', '1')->count();

        // Retorna la vista y pasa el valor del total de stock a la vista
        return view('inicio', compact('totalStockToners', 'totalImpresorasActivas'));
    }
}
