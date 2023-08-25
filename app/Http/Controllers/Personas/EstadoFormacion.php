<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EstadoformacionModel;
class EstadoFormacion extends Controller
{
    public function estadoformacion(){
        $estadoformacion=DB::table('estadoformacion')->get();
        return view('Personas.estadoformacion',['estadoformacion'=>$estadoformacion]);
    }

    public function insertarestadoformacion(Request $r){
        $estadoformacion = new EstadoformacionModel();//intancia un objeto del modelko Facultad
        $estadoformacion->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $estadoformacion->estaactivo = true;
        }
        else{
            $estadoformacion->estaactivo = false;
        }
        
        $estadoformacion->save();//guarde 
        return redirect('personas/estadoformacion');
    }

    public function guardaredicionestadoformacion(Request $r){
        $id=$r->input('id');
        $estadoformacion=EstadoformacionModel::findOrFail($id);
        $estadoformacion->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $estadoformacion->estaactivo = true;
        }else{
            $estadoformacion->estaactivo = false;
        }
        $estadoformacion->save();//guarde 
        return redirect('personas/estadoformacion');
    }

    public function formularioestadoformacion(){
        return view('Personas.estadoformacionform');
    }

    public function editarestadoformacion($id){
        $estadoformacion=EstadoformacionModel::findOrFail($id);
        return view('Personas.estadoformacionformeditar',['estadoformacion'=>$estadoformacion]);
    }

    public function eliminarestadoformacion($id){
        $estadoformacion = EstadoformacionModel::findOrFail($id);
        $estadoformacion->delete();
        return redirect("personas/estadoformacion");   
    }
}