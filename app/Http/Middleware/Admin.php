<?php

namespace App\Http\Middleware;

use App\Academia;
use App\Pago;
use Carbon\Carbon;
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

        if($this->auth->user()->tipo_usuario == 'admin')
        {

            $academia = Academia::all()->where('id', Auth::user()->aca_id)->first();

            switch ($academia->aca_status ){
                case "activa":
                    $pago = Pago::where('aca_id', Auth::user()->aca_id)
                        ->orderBy('created_at', 'desc')
                        ->get()
                        ->first();
                    $fecha_corte = Carbon::parse($academia->aca_fecha_corte);
                    $fecha_corte = Carbon::create(Carbon::now()->year, Carbon::now()->month, $fecha_corte->day)->subMonthNoOverflow(1);
                    if(Carbon::parse($pago->created_at)->lessThan($fecha_corte) )//|| Carbon::parse($pago->created_at)->diffInDays($fecha_corte) == 0)
                    {
                        $academia->aca_status = 'suspendida';
                        $academia->save();
                    }
                    //pantalla para aumentar o reducir plan
                    return $next($request);
                    break;
                case "suspendida":
                    return redirect()->route('academia-suspendida');
                    break;
                case "creada":
                    if(isset($request->planID))
                        return $next($request);
                    else
                        return redirect()->route('precios');
                    break;
                case "pendiente":
                    return redirect()->route('academia-pendiente');
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
