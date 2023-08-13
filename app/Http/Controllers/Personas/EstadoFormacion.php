<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoFormacion extends Controller
{
    public function estadoformacion(){
        return view('Personas.estadoformacion');
    }
}