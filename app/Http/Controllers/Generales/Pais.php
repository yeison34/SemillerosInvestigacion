<?php

namespace App\Http\Controllers\Generales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pais extends Controller
{
    public function pais(){
        return view('Generales.pais');
    }
}