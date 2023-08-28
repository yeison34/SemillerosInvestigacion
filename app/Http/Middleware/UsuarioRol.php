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
        session_start();

        
        if(isset($_SESSION['usuario'])){
            $data = json_decode($_SESSION['usuario'], true);
            $rol = $data['rol'];
            if($rol =='administrador' || $rol =='coordinador' || $rol =='semillerista'){
                return $next($r);
            }
        }
        else{
            return redirect('/'); 
            
        }


        
    }
}
