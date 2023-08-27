<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TipoidentificacionModel;
class TipoIdentificacion extends Controller
{

    public function tipoidentificacion(){
        $tipoidentificacion=DB::table('tipoidentificacion')->get();
        return view('Personas.tipoidentificacion',['tipoidentificacion'=>$tipoidentificacion]);
    }
    
    public function insertartipoidentificacion(Request $r){
        $tipoidentificacion = new TipoidentificacionModel();//intancia un objeto del modelko Facultad
        $tipoidentificacion->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $tipoidentificacion->estaactivo = true;
         }
         else{
            $tipoidentificacion->estaactivo = false;
 
         }
        
        $tipoidentificacion->save();//guarde 
        return redirect('personas/tipoidentificacion');
    }

    public function guardarediciontipoidentificacion(Request $r){
        $id=$r->input('id');
        $tipoidentificacion=TipoidentificacionModel::findOrFail($id);
        $tipoidentificacion->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $tipoidentificacion->estaactivo = true;
        }else{
            $tipoidentificacion->estaactivo = false;
        }
        $tipoidentificacion->save();//guarde 
        return redirect('personas/tipoidentificacion');
    }

    public function formulariotipoidentificacion(){
        return view('Personas.tipoidentificacionform');
    }

    public function editartipoidentificacion($id){
        $tipoidentificacion=TipoidentificacionModel::findOrFail($id);
        return view('Personas.tipoidentificacionformeditar',['tipoidentificacion'=>$tipoidentificacion]);
    }

    public function eliminartipoidentificacion($id){
        $tipoidentificacion = TipoidentificacionModel::findOrFail($id);
        $tipoidentificacion->delete();
        return redirect("personas/tipoidentificacion");   
    }
}