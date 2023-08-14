<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Departamentos;

class departamento extends Controller
{
    public function departamento(){
        $departamento=Departamentos::with('paises')->get();
        return view('Generales.departamento',['departamentos'=>$departamento]);
    }
    public function formulario_depa(){
        $paises=DB::table('paises')->get();
        return view('Generales.departamento_registro',['paises'=>$paises]);
    }
    public function registrar_dep(Request $request){
        $depa = new Departamentos(); 
        $depa->nombre = $request->input('nombre');
        $depa->idpais = $request->input('idpais');
        if ($request->input('estaactivo') == 'ON'){
            $depa->estaactivo = true;
        }
        else{
            $depa->estaactivo = false;
        }
        $depa-> save();
        return redirect('generales/departamento');
    }

    public function editar_depa(Request $request){
        $id=$request->input('id');
        $depa=Departamentos::findOrFail($id);
        $depa->nombre = $request->input('nombre');
        $depa->idpais = $request->input('idpais');
        if ($request->input('estaactivo') == 'on'){
            $depa->estaactivo = true;
        }
        else{
            $depa->estaactivo = false;
        }
        $depa-> save();
        return redirect('generales/departamento');
    }

    public function editar($id){
        $depa=Departamentos::findOrFail($id);
        $paise=DB::table('paises')->get();
        return view('Generales.departamento_editar',['departamento'=>$depa,'paises'=>$paise]);
    }

    public function eliminar($id){
        $depa=Departamentos::findOrFail($id);
        $depa->delete();
        return redirect('generales/departamento');
    }
}