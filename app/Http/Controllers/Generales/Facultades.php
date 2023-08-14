<?php

namespace App\Http\Controllers\Generales;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultad')->get();
        return view('Generales.listadofacultad', 
        ['facultades' =>$facultades]);
    }

    public function form_registro(){
        return view('Generales.form_registrofacultad');
    }

    public function form_editar($id){
        $facultad=Facultad::findOrFail($id);
        return view('Generales.form_editarfacultad',['modelo'=>$facultad]);
    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->nombre = $r->input('nombre');
        if($r->input('estaactivo')=="on"){
            $facultad->estaactivo=true;
        }else{
            $facultad->estaactivo=false;
        }
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function editarfacultad(Request $r){
        $id=$r->input('id');
        $facultad = Facultad::findOrFail($id);
        $facultad->nombre = $r->input('nombre');
        if($r->input('estaactivo')=="on"){
            $facultad->estaactivo=true;
        }else{
            $facultad->estaactivo=false;
        }
        $facultad->save();
        return redirect()->route('listadoFac');
    }

   
    public function eliminar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }
 
    
    
}
