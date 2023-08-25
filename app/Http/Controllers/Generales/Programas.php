<?php

namespace App\Http\Controllers\Generales;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;
use App\Http\Controllers\Controller;
class Programas extends Controller
{
    
    public function programa(){
        $programa=Programa::with('facultad')->get();
        return view("Programas.listado",['programa'=>$programa]);
    }

    public function insertarprograma(Request $r){
        $programa = new Programa();//intancia un objeto del modelko Facultad
        $programa->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $programa->idfacultad = $r->input('idfacultad');
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $programa->estaactivo = true;
         }
         else{
            $programa->estaactivo = false;
 
         }
        
        $programa->save();//guarde 
        return redirect('programas/listado');
    }

    public function guardaredicionprograma(Request $r){
        $id=$r->input('id');
        $programa=Programa::findOrFail($id);
        $programa->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $programa->idfacultad = $r->input('idfacultad');
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $programa->estaactivo = true;
         }
         else{
            $programa->estaactivo = false;
 
         }
        $programa->save();//guarde 
        return redirect('programas/listado');
    }

    public function formularioprograma(){
        $facultad=DB::table('facultad')->get();
        return view('Programas.programaform',['facultad'=>$facultad]);
    }

    public function editarprograma($id){
        $programa=Programa::findOrFail($id);
        $facultad=DB::table('facultad')->get();
        return view('Programas.programaformeditar',['programa'=>$programa,'facultad'=>$facultad]);
    }

    public function eliminarprograma($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect("programas/listado");   
    }
}
