<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    
    public function Listado(){
        return view("Profesores.Listado");
    }
}
