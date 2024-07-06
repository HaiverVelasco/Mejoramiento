<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\OrigenController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

//Rutas CRUD-Partido.(PRIMER EJERCICIO)
Route::get('partidoo/create',[PartidoController::class,'create']);
Route::get('partidoo/list',[PartidoController::class,'list'])->name('partidoo.list');
Route::post('partidoo/game',[PartidoController::class,'game'])->name('partidoo.game'); 
Route::get('partidoo/{partidoo}/show',[PartidoController::class,'show'])->name('partidoo.show');
Route::put('partidoo/{partidoo}',[PartidoController::class,'update'])->name('partidoo.update');
Route::delete('partidoo/{partidoo}',[PartidoController::class,'destroy'])->name('partidoo.destroy');
Route::get('partidoo/{partidoo}/edit',[PartidoController::class,'edit'])->name('partidoo.edit');

//Rutas CRUD-Jugador.(PRIMER EJERCICIO)
Route::get('jugadorr/create',[JugadorController::class,'create']);
Route::get('jugadorr/list',[JugadorController::class,'list'])->name('jugadorr.list');
Route::post('jugadorr/player',[JugadorController::class,'player'])->name('jugadorr.player'); 
Route::get('jugadorr/{jugadorr}/show',[JugadorController::class,'show'])->name('jugadorr.show');
Route::put('jugadorr/{jugadorr}',[JugadorController::class,'update'])->name('jugadorr.update');
Route::delete('jugadorr/{jugadorr}',[JugadorController::class,'destroy'])->name('jugadorr.destroy');
Route::get('jugadorr/{jugadorr}/edit',[JugadorController::class,'edit'])->name('jugadorr.edit');

//Rutas CRUD-Origen.(SEGUNDO EJERCICIO)
Route::get('viajee/create',[OrigenController::class,'create']);
Route::get('viajee/list',[OrigenController::class,'list'])->name('viajee.list');
Route::post('viajee/travel',[OrigenController::class,'travel'])->name('viajee.travel'); 
Route::get('viajee/{viajee}/show',[OrigenController::class,'show'])->name('viajee.show');
Route::put('viajee/{viajee}',[OrigenController::class,'update'])->name('viajee.update');
Route::delete('viajee/{viajee}',[OrigenController::class,'destroy'])->name('viajee.destroy');
Route::get('viajee/{viajee}/edit',[OrigenController::class,'edit'])->name('viajee.edit');

//Rutas CRUD-Viajero.(SEGUNDO EJERCICIO)
Route::get('viajeroo/create',[ViajeroController::class,'create']);
Route::get('viajeroo/list',[ViajeroController::class,'list'])->name('viajeroo.list');
Route::post('viajeroo/traveler',[ViajeroController::class,'traveler'])->name('viajeroo.traveler'); 
Route::get('viajeroo/{viajeroo}/show',[ViajeroController::class,'show'])->name('viajeroo.show');
Route::put('viajeroo/{viajeroo}',[ViajeroController::class,'update'])->name('viajeroo.update');
Route::delete('viajeroo/{viajeroo}',[ViajeroController::class,'destroy'])->name('viajeroo.destroy');
Route::get('viajeroo/{viajeroo}/edit',[ViajeroController::class,'edit'])->name('viajeroo.edit');

//Rutas CRUD-Cliente.(TERCER EJERCICIO)
Route::get('clientee/create',[ClienteController::class,'create']);
Route::get('clientee/list',[ClienteController::class,'list'])->name('clientee.list');
Route::post('clientee/client',[ClienteController::class,'client'])->name('clientee.client'); 
Route::get('clientee/{clientee}/show',[ClienteController::class,'show'])->name('clientee.show');
Route::put('clientee/{clientee}',[ClienteController::class,'update'])->name('clientee.update');
Route::delete('clientee/{clientee}',[ClienteController::class,'destroy'])->name('clientee.destroy');
Route::get('clientee/{clientee}/edit',[ClienteController::class,'edit'])->name('clientee.edit');

//Rutas CRUD-Colaborador.(TERCER EJERCICIO)
Route::get('colaboo/create',[ColaboradorController::class,'create']);
Route::get('colaboo/list',[ColaboradorController::class,'list'])->name('colaboo.list');
Route::post('colaboo/helper',[ColaboradorController::class,'helper'])->name('colaboo.helper'); 
Route::get('colaboo/{colaboo}/show',[ColaboradorController::class,'show'])->name('colaboo.show');
Route::put('colaboo/{colaboo}',[ColaboradorController::class,'update'])->name('colaboo.update');
Route::delete('colaboo/{colaboo}',[ColaboradorController::class,'destroy'])->name('colaboo.destroy');
Route::get('colaboo/{colaboo}/edit',[ColaboradorController::class,'edit'])->name('colaboo.edit');