<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use App\Models\TelefonoModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class Telefono extends Controller
{
    public function telefono($id){
        $telefono=TelefonoModel::where('idpersona','=',$id)->get();
        return view('Personas.telefono',['telefono'=>$telefono,'idpersona'=>$id]);
    }

    public function insertartelefono(Request $r){
        $telefono = new TelefonoModel();//intancia un objeto del modelo
        $telefono->telefono = $r->input('telefono');
        $bandera=$r->input('esprincipal');
        $bandera=$r->input('estaactivo');
        $telefono->idpersona= $r->input('idpersona');

        if ($r->input('esprincipal') === "on") {
            $telefono->esprincipal = true;
         }
         else{
            $telefono->esprincipal = false;
         }

         if ($r->input('estaactivo') === "on") {
            $telefono->estaactivo = true;
         }
         else{
            $telefono->estaactivo = false;
         }
        $telefono->save();//guarde
        return redirect('personas/telefono/'.$r->input('idpersona'));
    }

    public function formulariotelefono($id){
        return view('Personas.telefonoform',['idpersona'=>$id]);
    }

    public function editartelefono($id){
        $telefono=TelefonoModel::findOrFail($id);
        return view('Personas.telefonoeditar',['telefono' => $telefono]);
    }

    public function guardarediciontelefono(Request $r){
        $id=$r->input('id');
        $telefono=TelefonoModel::findOrFail($id);

        $telefono->telefono = $r->input('telefono');
        $telefono->esprincipal = $r->input('esprincipal');
        $telefono->estaactivo = $r->input('estaactivo');
        $telefono->idpersona= $r->input('idpersona');

        if ($r->input('esprincipal') === "on") {
            $telefono->esprincipal = true;
         }
         else{
            $telefono->esprincipal = false;
         }
         if ($r->input('estaactivo') === "on") {
            $telefono->estaactivo = true;
         }
         else{
            $telefono->estaactivo = false;
         }
        $telefono->save();//guarde
        return redirect('/personas/telefono/'.$r->input('idpersona'));
    }

    public function eliminartelefono($id){
        $telefono = TelefonoModel::findOrFail($id);
        $idpersona = $telefono->idpersona;
        $telefono->delete();
        return redirect("personas/telefono/".$idpersona);
    }
}
