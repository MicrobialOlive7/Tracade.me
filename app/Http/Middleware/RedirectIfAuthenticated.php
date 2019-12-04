<?php

namespace App\Http\Middleware;

use App\Academia;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $academia = Academia::all()->where('id', Auth::user()->aca_id)->first();
        if(Auth::user()->tipo_usuario == 'admin'){
            switch ($academia->aca_status ){
                case "activa":
                    return redirect('/inicio');
                    break;
                case "suspendida":
                    echo "Academia suspendida por falta de pago";
                    break;
                case "creada":
                    return redirect()->route('precios');
                    break;
                case "pendiente":
                    echo "estamos contruyendo tu plan, pronto tendra tracademe";
                    break;
                default:
                    return "Un error ha ocurrido, envia un mensaje a webmaster@tracade.me";
            }
        }
        else{
            return redirect('/alumno/inicio');
    }
        return $next($request);
    }
}
