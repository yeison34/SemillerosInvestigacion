<?php

namespace App\Http\Controllers\Generales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pais;

class Paises extends Controller
{

    public function index(){
        $paises = DB::table('paises')->get();
        return view('Generales.pais',['paises' =>$paises]);
    }

    public function form_registro(){
        return view('Generales.paisform');
    }
    public function registrar(Request $r){


        $pais = new Pais();
        $pais->nombre = $r->input('nombre');
        $pais->estaactivo = $r->input('esactivo');;
        $pais->save();
        return redirect()->route('listapais');
    }

    public function form_editar($id){
        $pais = Pais::findOrFail($id);
        return view('Generales.paisedit',['pais'=>$pais]);
    }

    public function editar(Request $r){
        $id=$r->input('id');
        $facultad = Pais::findOrFail($id);
        $facultad->nombre = $r->input('nombre');
        $facultad->save();
        return redirect()->route('listapais');
    }

    public function eliminar($id){
        $pais = Pais::findOrFail($id);
        $pais->delete();
        return redirect()->route('listapais');
    }

}