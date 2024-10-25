<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\TonerController;
use App\Http\Controllers\ImpresorasController;

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
    return view('inicio');
});

//llama a la vista de invetario de toner
Route::get('/modelos',[ModelosController::class,'index'])->name('modelos.index');
Route::post('/modelos',[ModelosController::class,'store'])->name('modelos.store');
//llama a la vista agregar toner
Route::get('/modelos/create',[ModelosController::class,'create'])->name('modelos.create');
//llama a la vista editar impresora
Route::get('/modelos/{id}/edit',[ModelosController::class,'edit'])->name('modelos.edit');
//llama a la vista editar impresora
Route::get('/modelos/delete',[ModelosController::class,'destroy'])->name('modelos.destroy');
Route::put('/modelos/{id}', [ModelosController::class, 'update'])->name('modelos.update');

//llama a la vista de invetario de toner
Route::get('/toners',[TonerController::class,'index'])->name('toners.index');
//llama a la vista agregar toner
Route::get('/toners/create',[TonerController::class,'create'])->name('toners.create');
//llama a la vista editar impresora
Route::get('/toners/edit',[TonerController::class,'edit'])->name('toners.edit');
//llama a la vista editar impresora
Route::get('/toners/delete',[TonerController::class,'delete'])->name('toners.delete');


//llama a la vista de invetario de impresoras
Route::get('/impresoras',[ImpresorasController::class,'index'])->name('impresoras.index');
Route::post('/impresoras',[ImpresorasController::class,'store'])->name('impresoras.store');
//llama a la vista agregar impresora
Route::get('/impresoras/create',[ImpresorasController::class,'create'])->name('impresoras.create');
//llama a la vista editar impresora
Route::get('/impresoras/edit',[ImpresorasController::class,'edit'])->name('impresoras.edit');
//llama a la vista editar impresora
Route::get('/impresoras/delete',[ImpresorasController::class,'delete'])->name('impresoras.delete');






