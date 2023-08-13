<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Personas extends Controller
{
    public function nivelestudio(){
        return view('Personas.nivelestudio');
    }

    public function estadoformacion(){
        return view('Personas.estadoformacion');
    }

    public function institucionformacion(){
        return view('Personas.institucionformacion');
    }

    public function tipoidentificacion(){
        return view('Personas.tipoidentificacion');
    }

    public function titulo(){
        return view('Personas.titulo');
    }
    public function formacionacademica(){
        return view('Personas.formacionacademica');
    }
}