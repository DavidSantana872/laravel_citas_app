<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use Carbon\Carbon; 

class CitaController extends Controller
{
    function index(){
        $citas = Cita::all();
        return view("Citas", compact('citas'));
    }
    function VerCitas(){
        $citas = Cita::all();
        return view("VerCitas.VerCitas", compact('citas'));
    }

    function VistaAgregarCita(){
        return view("AgregarCita.AgregarCita");
    }
    function EliminarCita(Request $request){
        $cita = Cita::findOrFail($request -> id);
        $cita->delete();
        return redirect()->route('ver.citas')-> with('success', 'Eliminado exitosamente.');
    }
    function AgregarCita(Request $request){
        $titulo = $request -> Titulo;
        $descripcion = $request -> Decripcion;
        $fecha = $request -> Fecha;

        Cita::create(
            [
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'fecha' => $fecha,
               
            ]
        );
        return redirect()->route('agregar.cita')->with('success', 'Cita creada exitosamente.');
    }
}
