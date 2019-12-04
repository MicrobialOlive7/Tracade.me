<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Pago;
use App\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function show($planID = 0) {
        if ($planID != 0) {
            $plan = Plan::all()->find($planID);
            return view('Corporativa.ResumenCompra', compact('plan'));
        }else {
            $plan = [];
            return $plan;
        }

        //
    }
    public function register($planID, $acaID){
        $plan = Plan::all()->find($planID);
        $pago = new Pago([
            'pag_fecha' => Carbon::now(),
            'pag_cantidad' => $plan->pla_precio,
            'aca_id' => $acaID,
        ]);
        $pago->save();

        $academia = Academia::all()->find($acaID);
        $academia->aca_status = 'activa';
        $academia->save();
        return redirect()->route('inicio');

    }
}
