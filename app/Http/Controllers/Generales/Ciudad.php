<?php

namespace App\Http\Controllers\Generales;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CiudadModel;

class Ciudad extends Controller
{
    
    public function ciudad(){
        $ciudad = CiudadModel::with('departamento')->get();
        return view('Generales.ciudad',['ciudad'=>$ciudad]); 
       // ['ciudad' =>$ciudad]);
    }

    public function form_registro(){
        $departamento=DB::table('departamento')->get();
        return view('Generales.ciudadform',['departamento'=>$departamento]);
    }

    public function insertarciudad(Request $r){
        $ciudad = new CiudadModel();
        $ciudad->nombre=$r->input('nombre');
        $ciudad->iddepartamento=$r->input('iddepartamento');
        if ($r->input('estaactivo') == 'on'){
            $ciudad->estaactivo = true;
        }
        else{
            $ciudad->estaactivo = false;
        }
        $ciudad->save();
        return redirect('/generales/ciudad');
    }

    public function editarciudad($id){
        $departamento=DB::table('departamento')->get();
        $ciudad = CiudadModel::findOrFail($id);
        return view('Generales.ciudadformeditar',['departamento'=>$departamento,'ciudad'=>$ciudad]);
    }

    public function eliminarciudad($id){
        $ciudad = CiudadModel::findOrFail($id);
        $ciudad->delete();
        return redirect('/generales/ciudad');
    }

    public function guardaredicionciudad(Request $r){
        $id=$r->input('id');
        $ciudad=CiudadModel::findOrFail($id);
        $ciudad->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $ciudad->iddepartamento = $r->input('iddepartamento');
        $bandera=$r->input('estaactivo');
        if($bandera=="on"){
            $ciudad->estaactivo = true;
        }else{
            $ciudad->estaactivo = false;
        }
        $ciudad->save();//guarde 
        return redirect('generales/ciudad');
    }
}