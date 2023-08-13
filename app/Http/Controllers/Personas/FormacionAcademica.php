<?php

namespace App\Http\Controllers\Personas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormacionAcademica extends Controller
{
    public function formacionacademica(){
        return view('Personas.formacionacademica');
    }
}