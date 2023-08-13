<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
    public function Formulario_Profesores(){
        return view('Profesores.Formulario_Profesores');
    }

    public function Registrar(Request $r){
        $profesor = new Profesor();//intancia un objeto del modelko Facultad
        $profesor->nomprofesor = $r->input('nombreProfesor');//monbrefacultad=a lo que esta en el formulario
        $profesor->codprofesor = $r->input('codigoProfesor');
        $profesor->catprofesor = $r->input('Categoria');
        $profesor->save();//guarde 
        return redirect()->route('listadoPro');
    }
    //funcion para listar los profesores 
    public function Listar_Profesores(){
        $profesor=DB::table('profesores')->get();
        return view('Profesores.Listar_Profesores',['profesor'=>$profesor]);
        
    }

    public function Eliminar($id){
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoPro');    
    }
}
