<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\departamentos;

class departamento extends Controller
{
    public function departamento(){
        return view('Generales.departamento');
    }
    public function formulario_depa(){
        return view('Generales.departamento_registro');
    }
    public function registrar_dep(Request $request){
        $depa = new departamentos(); 
        $depa->nombre = $request->input('nombreDep');
        if ($request->input('estaactivo') == 'ON'){
            $depa->estaactivo = true;
        }
        else{
            $depa->estaactivo = false;
        }
        $depa-> save();
        return redirect()->route('generales/departamento');
    }
}