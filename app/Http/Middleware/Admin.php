<?php

namespace App\Http\Middleware;

use App\Academia;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Admin
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this -> auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $academia = Academia::all()->where('id', Auth::user()->aca_id)->first();

        if($this->auth->user()->tipo_usuario == 'admin')
        {
            //return $next($request);

            switch ($academia->aca_status ){
                case "activa":
                    //pantalla para aumentar o reducir plan
                    return $next($request);
                    break;
                case "suspendida":
                    echo "Academia suspendida por falta de pago";
                    break;
                case "creada":
                    if(isset($request->planID))
                        return $next($request);
                    else
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
            abort(403, "No tienes Acceso a esta pagina");
        }
    }
}
