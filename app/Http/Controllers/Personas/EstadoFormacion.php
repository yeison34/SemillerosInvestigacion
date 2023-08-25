<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Formacion;

class EstadoFormacion extends Controller
{
    public function estadoformacion(){
        $formacion = DB::table('estadoformacion')->get();
        return view('Personas.estadoformacion', 
        ['estadoformacion' =>$formacion]);
        
    }
    public function Registrar(Request $r){
        $formacion = new Estadoformacion();//intancia un objeto del modelo 
        $formacion->nombre = $r->input('nombre');//monbre=a lo que esta en el formulario
        $profesor->estaactivo = $r->input('estaactivo');
        $profesor->save();//guarde 
        //return redirect()->route('listadoPro');
        return view('Personas.estadoformacion'); 

    }
}