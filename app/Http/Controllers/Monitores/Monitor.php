<?php

namespace App\Http\Controllers\Monitores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MonitorModel;
class Monitor extends Controller
{
    public function monitor(){
        $monitor=MonitorModel::with('persona','semillero','programa')->get();
        return view('Monitores.monitor',['monitor'=>$monitor]);
    }

    public function insertarmonitor(Request $r){
        $monitor = new MonitorModel();
        $monitor->codigo = $r->input('codigo');
        $monitor->idsede = $r->input('idsede');
        $monitor->idprograma = $r->input('idprograma');
        $monitor->idpersona = $r->input('idpersona');
        $monitor->semestre = $r->input('semestre');
        $monitor->idsemillero = $r->input('idsemillero');
        $monitor->fechavinculacion = $r->input('fechavinculacion');
        //$monitore->estaactivo = $r->input('estaactivo');
        //$persona->foto = $r->input('foto');
        ///archivo
        if($r->input('estaactivo')=="on"){
            $monitor->estaactivo = true;
        }else{
            $monitor->estaactivo = false;
        }
        $archivoerror=$_FILES['reportematricula']['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('monitores/reportesmatricula/');
            $rutadestino=$rutadestino . $r->input('idpersona') . $_FILES['reportematricula']['name'];
            $rutatemp=$_FILES['reportematricula']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $monitor->reportematricula=$r->input('idpersona') . $_FILES['reportematricula']['name'];
        }

        $archivoerror2=$_FILES['acuerdodenombramiento']['error'];
        if($archivoerror2!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('monitores/adjuntos/');
            $rutadestino=$rutadestino . $r->input('idpersona') . $_FILES['acuerdodenombramiento']['name'];
            $rutatemp=$_FILES['acuerdodenombramiento']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $monitor->reportematricula=$r->input('idpersona') . $_FILES['acuerdodenombramiento']['name'];
        }
        
        $monitor->save();
        //return redirect()->action('Personaspersona@editarpersona',['id'=>0]);
        return redirect('monitores/monitor');
        //return redirect()->route('editarpersona', ['id' => 0]);
    }

    public function guardaredicionmonitor(Request $r){
        $id=$r->input('id');
        $monitor=MonitorModel::findOrFail($id);
        $monitor->codigo = $r->input('codigo');
        $monitor->idsede = $r->input('idsede');
        $monitor->idprograma = $r->input('idprograma');
        $monitor->idpersona = $r->input('idpersona');
        $monitor->semestre = $r->input('semestre');
        $monitor->idsemillero = $r->input('idsemillero');
        $monitor->fechavinculacion = $r->input('fechavinculacion');
        //$monitore->estaactivo = $r->input('estaactivo');
        //$persona->foto = $r->input('foto');
        ///archivo
        if($r->input('estaactivo')=="on"){
            $monitor->estaactivo = true;
        }else{
            $monitor->estaactivo = false;
        }
        $archivoerror=$_FILES['reportematricula']['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('monitores/reportesmatricula/');
            $rutadestino=$rutadestino . $r->input('idpersona') . $_FILES['reportematricula']['name'];
            $rutatemp=$_FILES['reportematricula']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $monitor->reportematricula=$r->input('idpersona') . $_FILES['reportematricula']['name'];
        }

        $archivoerror2=$_FILES['acuerdodenombramiento']['error'];
        if($archivoerror2!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('monitores/adjuntos/');
            $rutadestino=$rutadestino . $r->input('idpersona') . $_FILES['acuerdodenombramiento']['name'];
            $rutatemp=$_FILES['acuerdodenombramiento']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $monitor->reportematricula=$r->input('idpersona') . $_FILES['acuerdodenombramiento']['name'];
        }
        
        $monitor->save();
        return redirect('monitores/monitor');
    }

    public function formulariomonitor(){
        $persona=DB::table("persona")->get();
        $programa=DB::table("programa")->get();
        $sede=DB::table("sedes")->get();
        $semillero=DB::table("semillero")->get();
        return view('Monitores.monitorform',['persona'=>$persona,'programa'=>$programa,'sede'=>$sede,'semillero'=>$semillero]);
    }

    public function editarmonitor($id){
        $monitor=MonitorModel::findOrFail($id);
        $persona=DB::table("persona")->get();
        $programa=DB::table("programa")->get();
        $sede=DB::table("sedes")->get();
        $semillero=DB::table("semillero")->get();
        return view('Monitores.monitorformeditar',['persona'=>$persona,'programa'=>$programa,'sede'=>$sede,'semillero'=>$semillero,'monitor'=>$monitor]);
    }

    public function eliminarmonitor($id){
        $monitor = MonitorModel::findOrFail($id);
        $monitor->delete();
        return redirect("monitores/monitor");   
    }
}