<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CitaController; // Importa el controlador

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

// Inicio Aplicacion
Route::get('/', [CitaController::class, 'index'])->name("inicio.app");

// Agergar Citas
Route::get('/citas', [CitaController::class, 'VistaAgregarCita'])->name('agregar.cita');
Route::post('/citas', [CitaController::class, 'AgregarCita'])->name('agregar.cita.db');

// Ver Citas
Route::get('/citas/activas', [CitaController::class, 'VerCitas'])->name('ver.citas');
Route::post('/citas/activas', [CitaController::class, 'EliminarCita'])->name('eliminar.cita');

