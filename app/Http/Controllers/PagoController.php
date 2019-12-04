<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Pago;
use App\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagoController extends Controller
{
    public function show($planID) {
        if($planID == 3)
            return view('Corporativa.plan-personalizado');
        elseif ($planID != 0)
        {
            $plan = Plan::all()->find($planID);
            return view('Corporativa.ResumenCompra', compact('plan'));
        }
    }
    public function register($planID, $acaID){
        $plan = Plan::all()->find($planID);
        $status = 'activa';
        $pago = new Pago([
            'pag_fecha' => Carbon::now(),
            'pag_cantidad' => $plan->pla_precio,
            'aca_id' => $acaID,
        ]);
        $pago->save();

        $academia = Academia::all()->find($acaID);
        $academia->aca_status = $status;
        $academia->pla_id = $planID;
        $academia->save();

        return redirect()->route('inicio');

    }

    public function create($acaID, $precio){
        $pago = new Pago([
            'pag_fecha' => Carbon::now(),
            'pag_cantidad' => $precio,
            'aca_id' => $acaID,
        ]);
        $pago->save();
        return redirect()->route('perfil');
    }
}
