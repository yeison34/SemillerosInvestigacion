<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Departamento extends Controller
{
    public function departamento(){
        return view('Generales.departamento');
    }
}