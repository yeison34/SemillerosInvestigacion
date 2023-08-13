<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sedes extends Controller
{
    public function sedes(){
        return view('Generales.sedes');
    }
}