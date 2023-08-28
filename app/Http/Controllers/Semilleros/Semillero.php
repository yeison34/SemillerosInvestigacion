<?php

namespace App\Http\Controllers\Semilleros;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SedesModel;
use App\Models\SemilleroModel;

class Semillero extends Controller
{
    public function semillero(){
        $semillero=SemilleroModel::with('sede')->get();
        return view('Semilleros.semillero',['semillero'=>$semillero]);
    }

    public function insertarsemillero(Request $r){
        $semillero = new SemilleroModel();//intancia un objeto del modelko Facultad
        $semillero->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $semillero->idsede = $r->input('idsede');
        $semillero->descripcion = $r->input('descripcion');
        $semillero->correo = $r->input('correo');
        $semillero->valores = $r->input('valores');
        $semillero->objetivos = $r->input('objetivos');
        $semillero->lineainvestigacion = $r->input('lineainvestigacion');
        $semillero->mision = $r->input('mision');
        $semillero->vision = $r->input('vision');
        $semillero->presentacion = $r->input('presentacion');
        $semillero->numeroresolucion = $r->input('numeroresolucion');
        $semillero->fecharesolucion = $r->input('fecharesolucion');
        //$semillero->idsede = $r->input('archivoresolucion');
        //$semillero->idsede = $r->input('logo');
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $semillero->estaactivo = true;
         }
         else{
            $semillero->estaactivo = false;
 
         }
        
        $archivoerror=$_FILES['logo']['error'];
        if($archivoerror===UPLOAD_ERR_NO_FILE){
            $semillero->logo='xdefaultx.png';
        }else{
            $rutadestino=public_path('semilleros/imagenes/');
            $rutadestino=$rutadestino . $r->input('numeroresolucion') . $_FILES['logo']['name'];
            $rutatemp=$_FILES['logo']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $semillero->logo=$r->input('numeroresolucion') . $_FILES['logo']['name'];
        }

        $archivoerror=$_FILES['archivoresolucion']['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('semillers/adjuntos/');
            $rutadestino=$rutadestino . $r->input('numeroresolucion') . $_FILES['archivoresolucion']['name'];
            $rutatemp=$_FILES['archivoresolucion']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $semillero->archivoresolucion=$r->input('numeroresolucion') . $_FILES['archivoresolucion']['name'];
        }

        $semillero->save();//guarde 
        return redirect('semilleros/semillero');
    }

    public function guardaredicionsemillero(Request $r){
        $id=$r->input('id');
        $semillero=SemilleroModel::findOrFail($id);
        $semillero->nombre = $r->input('nombre');//monbrefacultad=a lo que esta en el formulario
        $semillero->idsede = $r->input('idsede');
        $semillero->descripcion = $r->input('descripcion');
        $semillero->correo = $r->input('correo');
        $semillero->valores = $r->input('valores');
        $semillero->objetivos = $r->input('objetivos');
        $semillero->lineainvestigacion = $r->input('lineainvestigacion');
        $semillero->mision = $r->input('mision');
        $semillero->vision = $r->input('vision');
        $semillero->presentacion = $r->input('presentacion');
        $semillero->numeroresolucion = $r->input('numeroresolucion');
        $semillero->fecharesolucion = $r->input('fecharesolucion');
        
        $bandera=$r->input('estaactivo');
        
        if ($r->input('estaactivo') === "on") {
            $semillero->estaactivo = true;
         }
         else{
            $semillero->estaactivo = false;
 
         }
         $archivoerror=$_FILES["logo"]['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('semilleros/imagenes/');
            $rutadestino=$rutadestino . $r->input('numeroresolucion') . $_FILES['logo']['name'];
            $rutatemp=$_FILES['logo']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $semillero->logo=$r->input('numeroresolucion') . $_FILES['logo']['name'];
        }else{
            $semillero->logo=$semillero->logo;
        }

        $archivoerrorres=$_FILES['archivoresolucion']['error'];
        if($archivoerrorres!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('semilleros/adjuntos/');
            $rutadestino=$rutadestino . $r->input('numeroresolucion') . $_FILES['archivoresolucion']['name'];
            $rutatemp=$_FILES['archivoresolucion']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $semillero->archivoresolucion=$r->input('numeroresolucion') . $_FILES['archivoresolucion']['name'];
        }else{
            $semillero->archivoresolucion=$semillero->archivoresolucion;
        }
        $semillero->save();//guarde 
        return redirect('semilleros/semillero');
    }

    public function formulariosemillero(){
        $sede=DB::table('sedes')->get();
        return view('Semilleros.semilleroform',['sede'=>$sede]);
    }

    public function editarsemillero($id){
        $semillero=SemilleroModel::findOrFail($id);
        $sede=DB::table('sedes')->get();
        return view('Semilleros.semilleroformeditar',['sede'=>$sede,'semillero'=>$semillero]);
    }

    public function eliminarsemillero($id){
        $semillero = SemilleroModel::findOrFail($id);
        $semillero->delete();
        return redirect("semilleros/semillero");   
    }
}
