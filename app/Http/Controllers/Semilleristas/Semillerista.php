<?php

namespace App\Http\Controllers\Semilleristas;

use Dompdf\Dompdf;
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
        $semillerista->codigo = $r->input('codigo');
        $semillerista->idsede = $r->input('idsede');
        $semillerista->idprograma = $r->input('idprograma');
        $semillerista->idpersona = $r->input('idpersona');
        $semillerista->semestre = $r->input('semestre');
        $semillerista->idsemillero = $r->input('idsemillero');
        $semillerista->fechavinculacion = $r->input('fechavinculacion');
        //$semillerista->estaactivo = $r->input('estaactivo');
        //$persona->foto = $r->input('foto');
        ///archivo
        if($r->input('estaactivo')=="on"){
            $semillerista->estaactivo = true;
        }else{
            $semillerista->estaactivo = false;
        }
        $archivoerror=$_FILES['reportematricula']['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('semilleristas/reportesmatricula/');
            $rutadestino=$rutadestino . $r->input('idpersona') . $_FILES['reportematricula']['name'];
            $rutatemp=$_FILES['reportematricula']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $semillerista->reportematricula=$r->input('idpersona') . $_FILES['reportematricula']['name'];
        }
        
        $semillerista->save();
        //return redirect()->action('Personaspersona@editarpersona',['id'=>0]);
        return redirect('semilleristas/semillerista');
        //return redirect()->route('editarpersona', ['id' => 0]);
    }

    public function guardaredicionsemillerista(Request $r){
        $id=$r->input('id');
        $semillerista=SemilleristasModel::findOrFail($id);
        $semillerista->codigo = $r->input('codigo');
        $semillerista->idsede = $r->input('idsede');
        $semillerista->idprograma = $r->input('idprograma');
        $semillerista->idpersona = $r->input('idpersona');
        $semillerista->semestre = $r->input('semestre');
        $semillerista->idsemillero = $r->input('idsemillero');
        $semillerista->fechavinculacion = $r->input('fechavinculacion');
        //$semillerista->estaactivo = $r->input('estaactivo');
        //$persona->foto = $r->input('foto');
        ///archivo
        if($r->input('estaactivo')=="on"){
            $semillerista->estaactivo = true;
        }else{
            $semillerista->estaactivo = false;
        }
        $archivoerror=$_FILES['reportematricula']['error'];
        if($archivoerror!=UPLOAD_ERR_NO_FILE){
            $rutadestino=public_path('semilleristas/reportesmatricula/');
            $rutadestino=$rutadestino . $r->input('idpersona') . $_FILES['reportematricula']['name'];
            $rutatemp=$_FILES['reportematricula']['tmp_name'];
            move_uploaded_file($rutatemp,$rutadestino);
            $semillerista->reportematricula=$r->input('idpersona') . $_FILES['reportematricula']['name'];
        }else{
            $semillerista->reportematricula=$semillerista->reportematricula;
        }
        $semillerista->save();//guarde 
        return redirect('semilleristas/semillerista');
    }

    public function formulariosemillerista(){
        $persona=DB::table("persona")->get();
        $programa=DB::table("programa")->get();
        $sede=DB::table("sedes")->get();
        $semillero=DB::table("semillero")->get();
        return view('Semilleristas.semilleristaform',['persona'=>$persona,'programa'=>$programa,'sede'=>$sede,'semillero'=>$semillero]);
    }

    public function editarsemillerista($id){
        $semillerista=SemilleristasModel::findOrFail($id);
        $persona=DB::table("persona")->get();
        $programa=DB::table("programa")->get();
        $sede=DB::table("sedes")->get();
        $semillero=DB::table("semillero")->get();
        return view('Semilleristas.semilleristaformeditar',['persona'=>$persona,'programa'=>$programa,'sede'=>$sede,'semillero'=>$semillero,'semillerista'=>$semillerista]);
    }

    public function eliminarsemillerista($id){
        $persona = SemilleristasModel::findOrFail($id);
        $persona->delete();
        return redirect("semilleristas/semillerista");   
    }

    public function semilleristapdf(Request $request)
    {   
        $semillerista=SemilleristasModel::with('persona','semillero','programa','sede')->get();
        // Tu código para obtener los datos del coordinador

        $dompdf = new Dompdf();

        $html = view('Semilleristas.semilleristapdf',['semillerista'=>$semillerista])->render();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();
        
        // Mostrar el PDF en el navegador antes de la descarga
        $dompdf->stream('Semilleristas.pdf', ['Attachment' => false]);
    }
}