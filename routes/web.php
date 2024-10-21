<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TonerController;
use App\Http\Controllers\ImpresoraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//llama a la vista agregar toner
Route::get('/toners/create',[TonerController::class,'create'])->name('toners.create');
//llama a la vista agregar impresora
Route::get('/impresoras/create',[ImpresoraController::class,'create'])->name('impresoras.create');


