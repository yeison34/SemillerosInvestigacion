<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\RolUsuarioModel;
use App\Models\PersonaModel;
use App\Models\Coordinadores;





class Auth extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function userlogin(Request $r)
    {

        $data = [
            'idusuario' => null,
            'nombre' => null,
            'apellido' => null,
            'idpersona' => null,
            'rol' => null
        ];

        $usario = new LoginModel();
        $usario->usuario = $r->input('usuario');
        $usario->password = $r->input('password');

        $rUsuario = LoginModel::where('usuario', '=',    $usario->usuario  )
                                ->Where('password', '=',   $usario->password )
                                ->get();
        
        
        if ($rUsuario->isEmpty()) {
            return redirect('/');
        } else {
            session_start();
           
            $usuarioRol = RolUsuarioModel::where('idusuario', '=', $rUsuario[0]->id)->get();
            $rol =  $usuarioRol[0]->rol->nombre;
            $persona = PersonaModel::where('id','=',$rUsuario[0]->idpersona)->get();
            

            if($rol == 'coordinador' ){

                $data = [
                    'idusuario' => null,
                    'nombre' => null,
                    'apellido' => null,
                    'idpersona' => null,
                    'rol' => null,
                    'idsemillero' => null,
                    'semillero' => null
                ];

                $semillero = Coordinadores::where('idpersona','=',$rUsuario[0]->idpersona)->get();
                $nSemillero =  $semillero[0]->semillero->nombre;

                $data['idusuario'] = $rUsuario[0]->id;
                $data['nombre'] = $persona[0]->nombre;
                $data['apellido'] = $persona[0]->apellido;
                $data['idpersona'] = $rUsuario[0]->idpersona;
                $data['rol'] = $rol;
                $data['idsemillero'] = $semillero[0]->idsemillero;
                $data['semillero'] = $nSemillero;


            }
            elseif($rol == 'semillerista' || $rol == 'administrador' ){

                $data['idusuario'] = $rUsuario[0]->id;
                $data['nombre'] = $persona[0]->nombre;
                $data['apellido'] = $persona[0]->apellido;
                $data['idpersona'] = $rUsuario[0]->idpersona;
                $data['rol'] = $rol;

            }
       
            $_SESSION['usuario'] = json_encode($data);
            return redirect('/generales/pais');
        }
    }
}
