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

//llama a la vista de invetario de impresoras
Route::get('/impresoras/index',[ImpresoraController::class,'index'])->name('impresoras.index');
//llama a la vista agregar impresora
Route::get('/impresoras/create',[ImpresoraController::class,'create'])->name('impresoras.create');
//llama a la vista editar impresora
Route::get('/impresoras/edit',[ImpresoraController::class,'edit'])->name('impresoras.edit');
//llama a la vista editar impresora
Route::get('/impresoras/delete',[ImpresoraController::class,'delete'])->name('impresoras.delete');




//llama a la vista de invetario de toner
Route::get('/toners/index',[TonerController::class,'index'])->name('toners.index');
//llama a la vista agregar toner
Route::get('/toners/create',[TonerController::class,'create'])->name('toners.create');
//llama a la vista editar impresora
Route::get('/toners/edit',[TonerController::class,'edit'])->name('toners.edit');
//llama a la vista editar impresora
Route::get('/toners/delete',[TonerController::class,'delete'])->name('toners.delete');


