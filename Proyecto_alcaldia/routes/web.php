<?php

use App\Http\Controllers\equipos\EquiposController;
use App\Http\Controllers\jugadores\JugadoresController;
use App\Http\Controllers\localidades\LocalidadesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {  return view('welcome');
});
//equipos
Route::get('equipos',[EquiposController::class,'index'])->name('equipos.index');
Route::get('equipos/equipos',[EquiposController::class,'create'])->name('equipos.create');
Route::post('equipos',[EquiposController::class,'store'])->name('equipos.store');
Route::get('equipos/{id}',[EquiposController::class,'show'])->name('equipos.show');
Route::get('equipos/edit/{id}',[EquiposController::class,'edit'])->name('equipos.edit');
Route::put('equipos/{id}',[EquiposController::class,'update'])->name('equipos.update');
Route::delete('equipos/{id}',[EquiposController::class,'destroy'])->name('equipos.destroy');
// jugadores
//Route::get('product',[CompanyController::class,'index'])->name('company.index');
Route::get('jugadores',[JugadoresController::class,'index'])->name('jugadores.index');
Route::get('jugadores/jugadores',[JugadoresController::class,'create'])->name('jugadores.create');
Route::post('jugadores',[JugadoresController::class,'store'])->name('jugadores.store');
Route::get('jugadores/{id}',[JugadoresController::class,'show'])->name('jugadores.show');
Route::get('jugadores/edit/{id}',[JugadoresController::class,'edit'])->name('jugadores.edit');
Route::put('jugadores/{id}',[JugadoresController::class,'update'])->name('jugadores.update');
Route::delete('jugadores/{id}',[JugadoresController::class,'destroy'])->name('jugadores.destroy');
//localidades
Route::get('localidades',[LocalidadesController::class,'index'])->name('localidades.index');
Route::get('localidades/localidades',[LocalidadesController::class,'create'])->name('localidades.create');
Route::post('localidades',[LocalidadesController::class,'store'])->name('localidades.store');
Route::get('localidades/{id}',[LocalidadesController::class,'show'])->name('localidades.show');
Route::get('localidades/edit/{id}',[LocalidadesController::class,'edit'])->name('localidades.edit');
Route::put('localidades/{id}',[LocalidadesController::class,'update'])->name('localidades.update');
Route::delete('localidades/{id}',[LocalidadesController::class,'destroy'])->name('localidades.destroy');


