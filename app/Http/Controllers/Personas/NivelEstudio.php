<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NivelEstudio extends Controller
{
    public function nivelestudio(){
        return view('Personas.nivelestudio');
    }
}