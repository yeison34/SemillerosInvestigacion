<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\InstitucionformacionModel;
class InstitucionFormacion extends Controller
{
    public function institucionformacion(){
        $institucionformacion=DB::table('institucionformacion')->get();
        return view('Personas.institucionformacion',['institucionformacion'=>$institucionformacion]);
    }

    public function insertarinstitucionformacion(Request $r){
        $institucionformacion = new InstitucionformacionModel();//intancia un objeto del modelko Facultad
        $institucionformacion->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $institucionformacion->estaactivo = true;
        }
        else{
            $institucionformacion->estaactivo = false;
        }
        
        $institucionformacion->save();//guarde 
        return redirect('personas/institucionformacion');
    }

    public function guardaredicioninstitucionformacion(Request $r){
        $id=$r->input('id');
        $institucionformacion=InstitucionformacionModel::findOrFail($id);
        $institucionformacion->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $institucionformacion->estaactivo = true;
        }else{
            $institucionformacion->estaactivo = false;
        }
        $institucionformacion->save();//guarde 
        return redirect('personas/institucionformacion');
    }

    public function formularioinstitucionformacion(){
        return view('Personas.institucionformacionform');
    }

    public function editarinstitucionformacion($id){
        $institucionformacion=InstitucionformacionModel::findOrFail($id);
        return view('Personas.institucionformacionformeditar',['institucionformacion'=>$institucionformacion]);
    }

    public function eliminarinstitucionformacion($id){
        $institucionformacion = InstitucionformacionModel::findOrFail($id);
        $institucionformacion->delete();
        return redirect("personas/institucionformacion");   
    }
}