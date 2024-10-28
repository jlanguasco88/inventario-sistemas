<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelosTonersController;
use App\Http\Controllers\ModelosImpresorasController;
use App\Http\Controllers\TonerController;
use App\Http\Controllers\ImpresorasController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


//llama a la vista de invetario de Modelos de Toners
Route::get('/modelosToners',[ModelosTonersController::class,'index'])->name('modelosToners.index');
Route::post('/modelosToners',[ModelosTonersController::class,'store'])->name('modelosToners.store');
//llama a la vista agregar toner
Route::get('/modelosToners/create',[ModelosTonersController::class,'create'])->name('modelosToners.create');
//llama a la vista editar impresora
Route::get('/modelosToners/{id}/edit',[ModelosTonersController::class,'edit'])->name('modelosToners.edit');
//llama a la vista editar impresora
Route::get('/modelosToners/delete',[ModelosTonersController::class,'destroy'])->name('modelosToners.destroy');
Route::put('/modelosToners/{id}', [ModelosTonersController::class, 'update'])->name('modelosToners.update');


//llama a la vista de invetario de Modelos de Impresoras
Route::get('/modelosImpresoras',[ModelosImpresorasController::class,'index'])->name('modelosImpresoras.index');
Route::post('/modelosImpresoras',[ModelosImpresorasController::class,'store'])->name('modelosImpresoras.store');
//llama a la vista agregar toner
Route::get('/modelosImpresoras/create',[ModelosImpresorasController::class,'create'])->name('modelosImpresoras.create');
//llama a la vista editar impresora
Route::get('/modelosImpresoras/{id}/edit',[ModelosImpresorasController::class,'edit'])->name('modelosImpresoras.edit');
//llama a la vista editar impresora
Route::get('/modelosImpresoras/delete',[ModelosImpresorasController::class,'destroy'])->name('modelosImpresoras.destroy');
Route::put('/modelosImpresoras/{id}', [ModelosImpresorasController::class, 'update'])->name('modelosImpresoras.update');

//llama a la vista de invetario de toner
Route::get('/toners',[TonerController::class,'index'])->name('toners.index');
//llama a la vista agregar toner
Route::post('/toners',[TonerController::class,'store'])->name('toners.store');
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





