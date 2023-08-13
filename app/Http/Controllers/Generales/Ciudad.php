<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ciudad extends Controller
{
    public function ciudad(){
        return view('Generales.ciudad');
    }
}