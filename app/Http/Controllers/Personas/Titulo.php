<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Titulo extends Controller
{
    public function titulo(){
        return view('Personas.titulo');
    }
}