<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoIdentificacion extends Controller
{

    public function tipoidentificacion(){
        return view('Personas.tipoidentificacion');
    }
    
}