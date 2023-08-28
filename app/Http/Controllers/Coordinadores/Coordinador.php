<?php

namespace App\Http\Controllers\Coordinadores;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SedesModel;
use App\Models\CoordinadoresModel;

class Coordinador extends Controller
{
    public function coordinador(){
        $coordinador = CoordinadoresModel::with('sede')->get();
        return view('Coordinadores.coordinador',['coordinador'=>$coordinador]);
    }

    public function insertarcoordinador(Request $r){
        $coordinador = new CoordinadoresModel();//intancia un objeto del modelko Facultad
        $coordinador->idsede = $r->input('idsede');//monbrefacultad=a lo que esta en el formulario
        $coordinador->idpersona = $r->input('idpersona');
        $coordinador->codigo = $r->input('codigo');
        $coordinador->idprograma = $r->input('idprograma');
        $coordinador->idsemillero = $r->input('idsemillero');
        $coordinador->fechavinculacion = $r->input('fechavinculacion');
        
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $coordinador->estaactivo = true;
         }
         else{
            $coordinador->estaactivo = false;
 
         }
        
         $archivoerrorres=$_FILES['acuerdodenombramiento']['error'];
         if($archivoerrorres!=UPLOAD_ERR_NO_FILE){
             $rutadestino=public_path('coordinador/adjuntos/');
             $rutadestino=$rutadestino . $r->input('id') . $_FILES['acuerdodenombramiento']['name'];
             $rutatemp=$_FILES['acuerdodenombramiento']['tmp_name'];
             move_uploaded_file($rutatemp,$rutadestino);
             $coordinador->acuerdodenombramiento=$r->input('id') . $_FILES['acuerdodenombramiento']['name'];
         }

         $coordinador->save();//guarde 
         return redirect('coordinadores/coordinador');
    }

    public function guardaredicioncoordinador(Request $r){
        $id=$r->input('id');
        $coordinador=CoordinadoresModel::findOrFail($id);
        $coordinador->idsede = $r->input('idsede');//monbrefacultad=a lo que esta en el formulario
        $coordinador->idpersona = $r->input('idpersona');
        $coordinador->codigo = $r->input('codigo');
        $coordinador->idprograma = $r->input('idprograma');
        $coordinador->idsemillero = $r->input('idsemillero');
        $coordinador->fechavinculacion = $r->input('fechavinculacion');
        
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $coordinador->estaactivo = true;
         }
         else{
            $coordinador->estaactivo = false;
 
         }

        $archivoerrorres=$_FILES['acuerdodenombramiento']['error'];
        if($archivoerrorres!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('coordinador/adjuntos/');
            $rutadestino=$rutadestino . $r->input('id') . $_FILES['acuerdodenombramiento']['name'];
            $rutatemp=$_FILES['acuerdodenombramiento']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $coordinador->acuerdodenombramiento=$r->input('id') . $_FILES['acuerdodenombramiento']['name'];
        }else{
            $coordinador->acuerdodenombramiento=$coordinador->acuerdodenombramiento;
        }
        $coordinador->save();//guarde 
        return redirect('coordinadores/coordinador');
    }

    public function formulariocoordinador(){
        $sede=DB::table('sedes')->get();
        $persona=DB::table('persona')->get();
        $programa=DB::table('programa')->get();
        $semillero=DB::table('semillero')->get();
        return view('Coordinadores.coordinadorform',['sede'=>$sede,'persona'=>$persona,'programa'=>$programa,'semillero'=>$semillero]);
    }

    public function editarcoordinador($id){
        $coordinador=CoordinadoresModel::findOrFail($id);
        $sede=DB::table('sedes')->get();
        $persona=DB::table('persona')->get();
        $programa=DB::table('programa')->get();
        $semillero=DB::table('semillero')->get();
        return view('Coordinadores.coordinadorformeditar',['sede'=>$sede,'persona'=>$persona,'programa'=>$programa,'semillero'=>$semillero,'coordinador'=>$coordinador]);
    }

    public function eliminarcoordinador($id){
        $coordinador = CoordinadoresModel::findOrFail($id);
        $coordinador->delete();
        return redirect("coordinadores/coordinador");   
    }

    public function generar_pdf(){
        return view("Coordinadores.generarpdf");
    }
}
