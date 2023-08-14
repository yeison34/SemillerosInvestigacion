<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ciudad extends Controller
{
    
    public function ciudad(){
        //$ciudad = DB::table('ciudad')->get();
        return view('Generales.ciudad'); 
       // ['ciudad' =>$ciudad]);
    }

    public function form_registro(){
        return view('Generales.form_registro');
    }

    public function registrar(Request $r){
        $ciudad = new Ciudad();
        $facultad->codFacultad = $r->input('codigoFacultad');
        $facultad->nomFacultad = $r->input('nombreFacultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function editar(Request $r){
        //$id=$r->input('codFacultad');
        //$ciudad = Ciudad::findOrFail($id);
        //$ciudad->nomFacultad = $r->input('nomFacultad');
        //$ciudad->save();
        //return redirect()->route('listadoFac');
        return view('Generales.registra_ciudad');
    }

    public function eliminar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }
}