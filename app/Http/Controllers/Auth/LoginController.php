<?php

namespace App\Http\Controllers\Auth;

use App\Academia;
use App\Http\Controllers\Controller;
use Closure;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     *
     * CAMBIAR LOGIN POR DASHBOARD DE ESTUDIANTE E INSTRUCTOR
     */

    protected $redirectTo = '/alumno/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    protected function authenticated() {
        if (Auth::check()) {
            if(Auth::user()->tipo_usuario == 'admin'){
                $academia = Academia::all()->where('id', Auth::user()->aca_id)->first();
                switch ($academia->aca_status ){
                    case "activa":
                        return redirect('/inicio');
                        break;
                    case "suspendida":
                        return redirect()->route('academia-suspendida');
                        break;
                    case "creada":
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
                return redirect('/alumno/inicio');
            }
        }

    }
}
