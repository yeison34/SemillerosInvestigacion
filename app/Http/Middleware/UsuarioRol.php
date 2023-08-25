<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Models\RolUsuarioModel;

class UsuarioRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $r, Closure $next)
    {
        $usario = new LoginModel();
        $usario->usuario = $r->input('usuario');
        $usario->password = $r->input('password');
        
        $respuestaUsuario = LoginModel::where('usuario', 'LIKE', '%' .  $usario->usuario . '%')
                                    ->Where('password', 'LIKE','%' .  $usario->password . '%')
                                    ->get();
        print( $respuestaUsuario);

        // $id = $respuestaUsuario->id;
        // $respuestaRol = rol_usuarios::where('id_usuario', 'LIKE', '%' . $id  . '%')->get();
        
        // $id_rol = $respuestaRol->id_rol;
        // if (!$respuestaUsuario->isEmpty() && $id_rol == 2) {
        //     return $next($request);
        // }

        return $next($r);
    }
}
