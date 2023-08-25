<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;


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

        $respuesta = LoginModel::where('usuario', 'LIKE', '%' .  $usario->usuario . '%')
                                ->Where('password', 'LIKE','%' .  $usario->password . '%')
                                ->get();
 

        if ($respuesta->isEmpty()) {
            return view('Auth.login');
        } else {
            return redirect('/generales/pais');
        }
    }
}
