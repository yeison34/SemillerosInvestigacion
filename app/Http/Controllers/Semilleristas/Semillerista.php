<?php

namespace App\Http\Controllers\Semilleristas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SemilleristasModel;
class Semillerista extends Controller
{
    public function semillerista(){
        $semillerista=SemilleristasModel::with('persona','semillero','programa')->get();
        return view('Semilleristas.semillerista',['semillerista'=>$semillerista]);
    }

    public function insertarsemillerista(Request $r){
        $semillerista = new SemilleristasModel();
        $semillerista->nombre = $r->input('nombre');
        $semillerista->apellido = $r->input('apellido');
        $semillerista->identificacion = $r->input('identificacion');
        $semillerista->idtipoidentificacion = $r->input('idtipoidentificacion');
        $semillerista->fechanacimiento = $r->input('fechanacimiento');
        $semillerista->idciudad = $r->input('idciudad');
        $semillerista->genero = $r->input('genero');
        $semillerista->direccion = $r->input('direccion');
        //$persona->foto = $r->input('foto');
        ///archivo
        $archivoerror=$_FILES['foto']['error'];
        if($archivoerror===UPLOAD_ERR_NO_FILE){
            $persona->foto='xdefaultx.png';
        }else{
            $rutadestino=public_path('imagenes/');
            $rutadestino=$rutadestino . $r->input('identificacion') . $_FILES['foto']['name'];
            $rutatemp=$_FILES['foto']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $persona->foto=$r->input('identificacion') . $_FILES['foto']['name'];
        }
        
        $persona->save();
        //return redirect()->action('Personaspersona@editarpersona',['id'=>0]);
        return redirect('persona/editarpersona/'.$persona->id);
        //return redirect()->route('editarpersona', ['id' => 0]);
    }

    public function guardaredicionpersona(Request $r){
        $id=$r->input('id');
        $persona=PersonaModel::findOrFail($id);
        $persona->nombre = $r->input('nombre');
        $persona->apellido = $r->input('apellido');
        $persona->identificacion = $r->input('identificacion');
        $persona->idtipoidentificacion = $r->input('idtipoidentificacion');
        $persona->fechanacimiento = $r->input('fechanacimiento');
        $persona->idciudad = $r->input('idciudad');
        $persona->genero = $r->input('genero');
        $persona->direccion = $r->input('direccion');
        $archivoerror=$_FILES['foto']['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('imagenes/');
            $rutadestino=$rutadestino . $r->input('identificacion') . $_FILES['foto']['name'];
            $rutatemp=$_FILES['foto']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $persona->foto=$r->input('identificacion') . $_FILES['foto']['name'];
        }else{
            $persona->foto=$persona->foto;
        }
        $persona->save();//guarde 
        return redirect('personas/personas');
    }

    public function formulariopersona(){
        $ciudad=DB::table("ciudad")->get();
        $tipoidentificacion=DB::table("tipoidentificacion")->get();
        return view('Personas.personaform',['tipoidentificacion'=>$tipoidentificacion,'ciudad'=>$ciudad]);
    }

    public function editarpersona($id){
        $persona=PersonaModel::findOrFail($id);
        $ciudad=DB::table("ciudad")->get();
        $tipoidentificacion=DB::table("tipoidentificacion")->get();
        return view('Personas.personaformeditar',['persona'=>$persona,'tipoidentificacion'=>$tipoidentificacion,'ciudad'=>$ciudad]);
    }

    public function eliminarpersona($id){
        $persona = PersonaModel::findOrFail($id);
        $persona->delete();
        return redirect("personas/persona");   
    }
}