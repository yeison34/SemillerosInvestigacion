<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    
    public function Listado(){
        return view("Estudiantes.Listado");
    }
}
