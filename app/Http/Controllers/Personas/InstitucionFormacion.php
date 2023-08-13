<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitucionFormacion extends Controller
{
    public function institucionformacion(){
        return view('Personas.institucionformacion');
    }
}