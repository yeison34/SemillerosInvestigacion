<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FormacionacademicaModel;
use App\Models\NivelestudioModel;
use App\Models\TituloModel;
use App\Models\EstadoformacionModel;
use App\Models\InstitucionformacionModel;
class FormacionAcademica extends Controller
{
    public function formacionacademica($id){
        $formacionacademica=FormacionacademicaModel::where('idpersona','=',$id)->get();
        return view('Personas.formacionacademica',['formacionacademica'=>$formacionacademica,'idpersona'=>$id]);
    }

    public function insertarformacionacademica(Request $r){
        $formacionacademica = new FormacionacademicaModel();//intancia un objeto del modelko Facultad
        $formacionacademica->idnivelestudio = $r->input('idnivelestudio');//monbrefacultad=a lo que esta en el formulario
        $formacionacademica->idtitulo = $r->input('idtitulo');
        $formacionacademica->idestadoformacion = $r->input('idestadoformacion');
        $formacionacademica->idinstitucionformacion = $r->input('idinstitucionformacion');
        $formacionacademica->periodoinicio = $r->input('periodoinicio');
        $formacionacademica->esactual = $r->input('esactual');
        $formacionacademica->periodofinal= $r->input('periodofinal');
        $formacionacademica->idpersona= $r->input('idpersona');
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $formacionacademica->estaactivo = true;
         }
         else{
            $formacionacademica->estaactivo = false;
         }

         if ($r->input('esactual') === "on") {
            $formacionacademica->esactual = true;
         }
         else{
            $formacionacademica->esactual = false;
         }

        
        $formacionacademica->save();//guarde 
        return redirect('personas/formacionacademica/'.$r->input('idpersona'));
    }

    public function guardaredicionformacionacademica(Request $r){
        $id=$r->input('id');
        $formacionacademica=FormacionacademicaModel::findOrFail($id);
        $formacionacademica->idnivelestudio = $r->input('idnivelestudio');//monbrefacultad=a lo que esta en el formulario
        $formacionacademica->idtitulo = $r->input('idtitulo');
        $formacionacademica->idestadoformacion = $r->input('idestadoformacion');
        $formacionacademica->idinstitucionformacion = $r->input('idinstitucionformacion');
        $formacionacademica->periodoinicio = $r->input('periodoinicio');
        $formacionacademica->esactual = $r->input('esactual');
        $formacionacademica->periodofinal= $r->input('periodofinal');
        $formacionacademica->idpersona= $r->input('idpersona');
        $bandera=$r->input('estaactivo');
        if ($r->input('estaactivo') === "on") {
            $formacionacademica->estaactivo = true;
         }
         else{
            $formacionacademica->estaactivo = false;
         }

         if ($r->input('esactual') === "on") {
            $formacionacademica->esactual = true;
         }
         else{
            $formacionacademica->esactual = false;
         }

        
        $formacionacademica->save();//guarde 
        return redirect('personas/formacionacademica/'.$r->input('idpersona'));
        //return redirect('personas/formacionacademica');
    }

    public function formularioformacionacademica($id){
        $nivelestudio=DB::table('nivelestudio')->get();
        $estadoformacion=DB::table('estadoformacion')->get();
        $institucionformacion=DB::table('institucionformacion')->get();
        
        return view('Personas.formacionacademicaform',['nivelestudio'=>$nivelestudio,'estadoformacion'=>$estadoformacion,'institucionformacion'=>$institucionformacion,'idpersona'=>$id]);
    }

    public function editarformacionacademica($id){
        $nivelestudio=DB::table('nivelestudio')->get();
        $estadoformacion=DB::table('estadoformacion')->get();
        $institucionformacion=DB::table('institucionformacion')->get();
        $formacionacademica=FormacionacademicaModel::findOrFail($id);
        //$ciudades=DB::table('ciudad')->get();
        return view('Personas.formacionacademicaformeditar',['nivelestudio'=>$nivelestudio,'estadoformacion'=>$estadoformacion,'institucionformacion'=>$institucionformacion,'formacionacademica'=>$formacionacademica]);
    }

    public function eliminarformacionacademica($id){
        $sede = SedesModel::findOrFail($id);
        $sede->delete();
        return redirect("personas/formacionacademica");   
    }
}