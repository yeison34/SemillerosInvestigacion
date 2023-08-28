<?php

namespace App\Http\Controllers\Eventos;

use App\Http\Controllers\Controller;
use App\Models\ClasificacioneventoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Clasificacion extends Controller
{
    public function clasificacionevento(){
        $evento = DB::table('clasificacionevento')->get();
        return view('Eventos.clasificacionevento',['evento'=>$evento]);
    }

    public function formularioclasificacionevento(){
        return view('Eventos.clasificacioneventoform');
    }

    public function insertarclasificacionevento(Request $r){
        $evento = new ClasificacioneventoModel();//intancia un objeto del modelo

        $evento->nombre = $r->input('nombre');

        if ($r->input('estaactivo') === "on") {
            $evento->estaactivo = true;
         }
         else{
            $evento->estaactivo = false;
         }
        $evento->save();//guarde
        return redirect('eventos/clasificacion');
    }

    public function editarclasificacionevento($id){
        $evento = ClasificacioneventoModel::findOrFail($id);
        return view('Eventos.clasificacioneventoeditar',['evento'=>$evento]);
    }

    public function guardaredicionclasificacionevento(Request $r){
        $id=$r->input('id');
        $evento=ClasificacioneventoModel::findOrFail($id);

        $evento->nombre = $r->input('nombre');

         if ($r->input('estaactivo') === "on") {
            $evento->estaactivo = true;
         }
         else{
            $evento->estaactivo = false;
         }$evento->save();//guarde
        return redirect('eventos/clasificacion'.$r->input('idpersona'));
    }

    public function eliminarclasificacionevento($id){
        $evento = ClasificacioneventoModel::findOrFail($id);
        $evento->delete();
        return redirect("eventos/clasificacion");
    }
}
