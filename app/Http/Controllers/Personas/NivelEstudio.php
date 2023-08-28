<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NivelestudioModel;
use App\Models\TituloModel;
class NivelEstudio extends Controller
{
    public function nivelestudio(){
        $nivelestudio=DB::table('nivelestudio')->get();
        return view('Personas.nivelestudio',['nivelestudio'=>$nivelestudio]);
    }

    
    public function insertarnivelestudio(Request $r){
        $nivelestudio = new NivelestudioModel();//intancia un objeto del modelko Facultad
        $nivelestudio->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        
        if($bandera=="on"){
            $nivelestudio->estaactivo = true;
        }else{
            $nivelestudio->estaactivo = false;
        }
        
        $nivelestudio->save();//guarde 
        return redirect('personas/nivelestudio');
    }

    public function guardaredicionnivelestudio(Request $r){
        $id=$r->input('id');
        $nivelestudio=NivelestudioModel::findOrFail($id);
        $nivelestudio->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $nivelestudio->estaactivo = true;
        }else{
            $nivelestudio->estaactivo = false;
        }
        $nivelestudio->save();//guarde 
        return redirect('personas/nivelestudio');
    }

    public function formularionivelestudio(){
        $nivelestudio=DB::table('nivelestudio')->get();
        return view('Personas.nivelestudioform',['nivelestudio'=>$nivelestudio]);
    }

    public function editarnivelestudio($id){
        $nivelestudio=NivelestudioModel::findOrFail($id);
        return view('Personas.nivelestudioformeditar',['nivelestudio'=>$nivelestudio]);
    }

    public function eliminarnivelestudio($id){
        $nivelestudio = NivelestudioModel::findOrFail($id);
        $nivelestudio->delete();
        return redirect("personas/nivelestudio");   
    }
}