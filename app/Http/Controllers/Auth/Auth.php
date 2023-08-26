<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\RolUsuarioModel;



class Auth extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function userlogin(Request $r)
    {
        $usario = new LoginModel();
        $usario->usuario = $r->input('usuario');
        $usario->password = $r->input('password');

        $respuesta = LoginModel::where('usuario', '=',    $usario->usuario  )
                                ->Where('password', '=',   $usario->password )
                                ->get();
        
    
        if ($respuesta->isEmpty()) {
            return redirect('/');
        } else {
            session_start();
            // print($respuesta);
            $usuarioRol = RolUsuarioModel::where('idusuario', '=', $respuesta[0]->id)->get();
            $rol =  $usuarioRol[0]->rol->nombre;
            $_SESSION['usuario'] = $rol;

            return redirect('/generales/pais');
        }
    }
}
