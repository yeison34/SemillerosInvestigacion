<?php

namespace App\Http\Controllers\Eventos;

use App\Http\Controllers\Controller;
use App\Models\ModalidadeventoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Modalidad extends Controller
{
    public function modalidadevento(){
        $evento = DB::table('modalidadevento')->get();
        return view('Eventos.modalidadevento',['evento'=>$evento]);
    }

    public function formulariomodalidadevento(){
        return view('Eventos.modalidadeventoform');
    }

    public function insertarmodalidadevento(Request $r){
        $evento = new ModalidadeventoModel();//intancia un objeto del modelo

        $evento->nombre = $r->input('nombre');

        if ($r->input('estaactivo') === "on") {
            $evento->estaactivo = true;
         }
         else{
            $evento->estaactivo = false;
         }
        $evento->save();//guarde
        return redirect('eventos/modalidad');
    }

    public function editarmodalidadevento($id){
        $evento = ModalidadeventoModel::findOrFail($id);
        return view('Eventos.modalidadeventoeditar',['evento'=>$evento]);
    }

    public function guardaredicionmodalidadevento(Request $r){
        $id=$r->input('id');
        $evento=ModalidadeventoModel::findOrFail($id);

        $evento->nombre = $r->input('nombre');

         if ($r->input('estaactivo') === "on") {
            $evento->estaactivo = true;
         }
         else{
            $evento->estaactivo = false;
         }$evento->save();//guarde
        return redirect('eventos/modalidad'.$r->input('idpersona'));
    }

    public function eliminarmodalidadevento($id){
        $evento = ModalidadeventoModel::findOrFail($id);
        $evento->delete();
        return redirect("eventos/modalidad");
    }

}
