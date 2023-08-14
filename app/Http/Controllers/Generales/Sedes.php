<?php

namespace App\Http\Controllers\Generales;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SedesModel;
use App\Models\Ciudad;

class Sedes extends Controller
{
    public function sedes(){
        $listasedes=SedesModel::with('ciudad')->get();
        return view('Generales.sedes',['sedes'=>$listasedes]);
    }

    public function insertar(Request $r){
        $sede = new SedesModel();//intancia un objeto del modelko Facultad
        $sede->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $sede->idciudad = $r->input('idciudad');
        $bandera=$r->input('estaactivo');
        $sede->estaactivo = false;
        if($bandera=="1"){
            $sede->estaactivo = true;
        }
        
        $sede->save();//guarde 
        return redirect('generales/sedes');
    }

    public function guardaredicion(Request $r){
        $id=$r->input('id');
        $sede=SedesModel::findOrFail($id);
        $sede->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $sede->idciudad = $r->input('idciudad');
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $sede->estaactivo = true;
        }else{
            $sede->estaactivo = false;
        }
        print($r->input('estaactivo'));
        $sede->save();//guarde 
        return redirect('generales/sedes');
    }

    public function formulariosedes(){
        $ciudad=DB::table('ciudad')->get();
        return view('Generales.sedesform',['ciudades'=>$ciudad]);
    }

    public function editar($id){
        $sede=SedesModel::findOrFail($id);
        $ciudades=DB::table('ciudad')->get();
        return view('Generales.sedesformeditar',['sede'=>$sede,'ciudades'=>$ciudades]);
    }

    public function eliminar($id){
        $sede = SedesModel::findOrFail($id);
        $sede->delete();
        return redirect("generales/sedes");   
    }
}
