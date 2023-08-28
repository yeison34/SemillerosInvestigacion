<?php

namespace App\Http\Controllers\Eventos;

use App\Http\Controllers\Controller;
use App\Models\TipoeventoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tipo extends Controller
{
    public function tipoevento(){
        $evento = DB::table('tipoevento')->get();
        return view('Eventos.tipoevento',['evento'=>$evento]);
    }

    public function formulariotipoevento(){
        return view('Eventos.tipoeventoform');
    }

    public function insertartipoevento(Request $r){
        $evento = new TipoeventoModel();//intancia un objeto del modelo

        $evento->nombre = $r->input('nombre');

        if ($r->input('estaactivo') === "on") {
            $evento->estaactivo = true;
         }
         else{
            $evento->estaactivo = false;
         }
        $evento->save();//guarde
        return redirect('eventos/tipos');
    }

    public function editartipoevento($id){
        $evento = TipoeventoModel::findOrFail($id);
        return view('Eventos.tipoeventoeditar',['evento'=>$evento]);
    }

    public function guardarediciontipoevento(Request $r){
        $id=$r->input('id');
        $evento=TipoeventoModel::findOrFail($id);

        $evento->nombre = $r->input('nombre');

         if ($r->input('estaactivo') === "on") {
            $evento->estaactivo = true;
         }
         else{
            $evento->estaactivo = false;
         }$evento->save();//guarde
        return redirect('eventos/tipos'.$r->input('idpersona'));
    }

    public function eliminartipoevento($id){
        $evento = TipoeventoModel::findOrFail($id);
        $evento->delete();
        return redirect("eventos/tipos");
    }
}
