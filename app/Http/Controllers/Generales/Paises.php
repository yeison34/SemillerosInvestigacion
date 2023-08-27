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

        if($r->input('esactivo')=="on"){
            $pais->estaactivo = true;
        }else{
            $pais->estaactivo = false;
        }
        $pais->save();
        return redirect()->route('listapais');
    }

    public function form_editar($id){
        $pais = Pais::findOrFail($id);
        return view('Generales.paisedit',['pais'=>$pais]);
    }

    public function saveeditar(Request $r){
        $id = $r->input('id');
        $pais = Pais::findOrFail($id);
        $pais-> nombre = $r->input('nombre');
        if ($r->input('estaactivo') === "on") {
           $pais -> estaactivo = true ;
        }
        else{
           $pais -> estaactivo = false ;

        }
        $pais-> nombre = $r->input('nombre');
        $pais->save();
        return redirect()->route('listapais');
    }

    public function eliminar($id){
        $pais = Pais::findOrFail($id);
        $pais->delete();
        return redirect()->route('listapais');
    }

}
