<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Alumno;
use App\DiciplinaAlumno;
use App\Pago;
use App\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;

class AdministradorController extends Controller
{
    public function update(Request $request){
        $alumno = Alumno::all()->find(Auth::user()->id);
        if(isset($request->password)){
            $alumno->password = Hash::make($request->password);
        }
        $alumno->alu_nombre = $request['nombre'];
        $alumno->email = $request['email'];
        $alumno->alu_apellido_paterno = $request['apellido_paterno'];
        $alumno->alu_apellido_materno = $request['apellido_materno'];

        $alumno->alu_biografia = $request['bio'];
        $alumno->save();

        return redirect()->route('perfil');

    }

    public function showPerfil(){
        $pago = Pago::where('aca_id', Auth::user()->aca_id)
        ->orderBy('created_at', 'desc')
        ->get()
        ->first();
        $academia = Academia::all()->find(Auth::user()->aca_id);
        $fecha_corte = Carbon::parse($academia->aca_fecha_corte);
        $fecha_corte = Carbon::create(Carbon::now()->year, Carbon::now()->month, $fecha_corte->day);
        $precio = Plan::all()->find($academia->pla_id)->pla_precio;
        $plan = Plan::all()->find($academia->pla_id);
        return view('Instructor.perfil', compact('pago', 'academia', 'fecha_corte', 'precio', 'plan'));
    }
}
