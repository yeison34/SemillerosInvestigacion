<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller{
	public function getPDF(){
		$name = 'pdf_generado';
		$pdf = PDF::loadView('Coordinadores.generarpdf', compact('name'));
		return $pdf->stream('prueba.pdf');
	}
}
