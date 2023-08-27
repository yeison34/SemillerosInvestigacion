<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TituloModel;
use Illuminate\Support\Facades\DB;
class Titulo extends Controller
{
    public function titulo(){
        $titulo=TituloModel::with('nivelestudio')->get();
        return view('Personas.titulo',['titulo'=>$titulo]);
    }

    public function getTituloPorIdNivel($id){
        $titulo=TituloModel::where('idnivelestudio','=',$id)->get();
       
        return response()->json($titulo);
    }

    public function insertartitulo(Request $r){
        $titulo = new TituloModel();//intancia un objeto del modelko Facultad
        $titulo->nombre = $r->input('nombre');
        $titulo->idnivelestudio = $r->input('idnivelestudio');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        $titulo->estaactivo = false;
        if($bandera=="1"){
            $titulo->estaactivo = true;
        }
        
        $titulo->save();//guarde 
        return redirect('personas/titulo');
    }

    public function guardarediciontitulo(Request $r){
        $id=$r->input('id');
        $titulo=TituloModel::findOrFail($id);
        $titulo->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        $titulo->idnivelestudio = $r->input('idnivelestudio');
        if($bandera=="on"){
            $titulo->estaactivo = true;
        }else{
            $titulo->estaactivo = false;
        }
        $titulo->save();//guarde 
        return redirect('generales/titulo');
    }

    public function formulariotitulo(){
        $nivelestudio=DB::table('nivelestudio')->get();
        return view('Personas.tituloform',['nivelestudio'=>$nivelestudio]);
    }

    public function editartitulo($id){
        $titulo=TituloModel::findOrFail($id);
        return view('Personas.tituloformeditar',['titulo'=>$titulo]);
    }

    public function eliminartitulo($id){
        $titulo = TituloModel::findOrFail($id);
        $titulo->delete();
        return redirect("generales/titulo");   
    }
}