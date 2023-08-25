<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;


class Auth extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function userlogin(Request $r)
    {
        $usario = new Login();
        $usario->usuario = $r->input('usuario');
        $usario->password = $r->input('password');

        $respuesta = Login::where('usuario', 'LIKE', '%' .  $usario->usuario . '%')
                            ->Where('password', '=','%' .  $usario->password . '%')
                            ->get();
 
        if ($respuesta->isEmpty()) {
            return view('Auth.login');
        } else {
            return view('Generales.pais', ['respuesta' => $respuesta]);
        }
    }
}
