<?php

namespace App\Http\Controllers\Proyectos;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoProyectoModel;
use App\Models\Ciudad;

class Tipoproyecto extends Controller
{
    public function tipoproyecto(){
        $tipoproyecto=DB::table('tipoproyecto')->get();
        return view('Proyectos.tipoproyecto',['tipoproyecto'=>$tipoproyecto]);
    }

    public function insertartipoproyecto(Request $r){
        $tipoproyecto = new TipoproyectoModel();//intancia un objeto del modelko Facultad
        $tipoproyecto->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        
        
        if ($r->input('estaactivo') === "on") {
            $tipoproyecto->estaactivo = true;
         }
         else{
            $tipoproyecto->estaactivo = false;
 
         }
        
        $tipoproyecto->save();//guarde 
        return redirect('tipoproyectos/tipoproyecto');
    }

    public function guardarediciontipoproyecto(Request $r){
        $id=$r->input('id');
        $tipoproyecto=TipoproyectoModel::findOrFail($id);
        $tipoproyecto->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $tipoproyecto->estaactivo = true;
        }else{
            $tipoproyecto->estaactivo = false;
        }
        
        $tipoproyecto->save();//guarde 
        return redirect('tipoproyectos/tipoproyecto');
    }

    public function formulariotipoproyecto(){
        return view('Proyectos.tipoproyectoform');
    }

    public function editartipoproyecto($id){
        $tipoproyecto=TipoproyectoModel::findOrFail($id);
        return view('Proyectos.tipoproyectoformeditar',['tipoproyecto'=>$tipoproyecto]);
    }

    public function eliminartipoproyecto($id){
        $tipoproyecto = TipoproyectoModel::findOrFail($id);
        $tipoproyecto->delete();
        return redirect("proyectos/tipoproyecto");   
    }
}