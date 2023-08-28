<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use App\Models\CorreoModel;
use Illuminate\Http\Request;

class Correo extends Controller
{
    public function correo($id){
        $correo=CorreoModel::where('idpersona','=',$id)->get();
        return view('Personas.correo',['correo'=>$correo,'idpersona'=>$id]);
    }
    public function formulariocorreo($id){
        return view('Personas.correoform',['idpersona'=>$id]);
    }

    public function insertarcorreo(Request $r){
        $correo = new CorreoModel();//intancia un objeto del modelo
        $correo->email = $r->input('email');
        $correo->idpersona= $r->input('idpersona');

        if ($r->input('esprincipal') === "on") {
            $correo->esprincipal = true;
         }
         else{
            $correo->esprincipal = false;
         }

         if ($r->input('estaactivo') === "on") {
            $correo->estaactivo = true;
         }
         else{
            $correo->estaactivo = false;
         }
        $correo->save();//guarde
        return redirect('personas/correo/'.$r->input('idpersona'));
    }
    public function editarcorreo($id){
        $correo=correoModel::findOrFail($id);
        return view('Personas.correoeditar',['correo' => $correo]);
    }

    public function guardaredicioncorreo(Request $r){
        $id=$r->input('id');
        $correo=correoModel::findOrFail($id);

        $correo->email = $r->input('email');
        $correo->esprincipal = $r->input('esprincipal');
        $correo->estaactivo = $r->input('estaactivo');
        $correo->idpersona= $r->input('idpersona');

        if ($r->input('esprincipal') === "on") {
            $correo->esprincipal = true;
         }
         else{
            $correo->esprincipal = false;
         }
         if ($r->input('estaactivo') === "on") {
            $correo->estaactivo = true;
         }
         else{
            $correo->estaactivo = false;
         }
        $correo->save();//guarde
        return redirect('/personas/correo/'.$r->input('idpersona'));
    }

    public function eliminarcorreo($id){
        $correo = CorreoModel::findOrFail($id);
        $idpersona = $correo->idpersona;
        $correo->delete();
        return redirect("personas/correo/".$idpersona);
    }

}
