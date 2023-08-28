<?php

namespace App\Http\Controllers\Proyectos;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoproyectoModel;


class Estadoproyecto extends Controller
{
    public function estadoproyecto(){
        $estadoproyecto=DB::table('estadoproyecto')->get();
        return view('Proyectos.estadoproyecto',['estadoproyecto'=>$estadoproyecto]);
    }

    public function insertarestadoproyecto(Request $r){
        $estadoproyecto = new EstadoproyectoModel();//intancia un objeto del modelko Facultad
        $estadoproyecto->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        
        
        if ($r->input('estaactivo') === "on") {
            $estadoproyecto->estaactivo = true;
         }
         else{
            $estadoproyecto->estaactivo = false;
 
         }
        
        $estadoproyecto->save();//guarde 
        return redirect('estadoproyectos/estadoproyecto');
    }

    public function guardaredicionestadoproyecto(Request $r){
        $id=$r->input('id');
        $estadoproyecto=EstadoproyectoModel::findOrFail($id);
        $estadoproyecto->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $estadoproyecto->estaactivo = true;
        }else{
            $estadoproyecto->estaactivo = false;
        }
        
        $estadoproyecto->save();//guarde 
        return redirect('estadoproyectos/estadoproyecto');
    }

    public function formularioestadoproyecto(){
        return view('Proyectos.estadoproyectoform');
    }

    public function editarestadoproyecto($id){
        $estadoproyecto=EstadoproyectoModel::findOrFail($id);
        return view('Proyectos.estadoproyectoformeditar',['estadoproyecto'=>$estadoproyecto]);
    }

    public function eliminarestadoproyecto($id){
        $estadoproyecto = EstadoproyectoModel::findOrFail($id);
        $estadoproyecto->delete();
        return redirect("estadoproyectos/estadoproyecto");   
    }
}