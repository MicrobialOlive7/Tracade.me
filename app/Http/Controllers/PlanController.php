<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PlanController extends Controller
{
    public function register(Request $request){
        $plan = new Plan([
            'pla_nombre' => $request->pla_nombre,
            'pla_tipo_plan' => $request->pla_tipo_plan,
            'pla_precio' => $request->pla_precio,
            'pla_descripcion' => $request->pla_descripcion,
            'pla_numero_alumnos' => $request->pla_numero_alumnos,
        ]);
        $plan->save();
        return response()->json([
            'id' => $plan->id,
        ], 201);
    }

    public function personalizadoEmail(Request $request){
        //return $request;
        $this->validate($request,[
            'name' => 'required',
            'alumnos' => 'required|int',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $academia = Academia::all()->find($request->id);
        $academia->aca_status = "pendiente";
        $academia->save();
        Mail::send('Corporativa.correos', [
            'msg' => "De: ".$request->email."\n   Academia: ".$request->id."\n    Plan: ".$request->name."\n   Alumnos: ".$request->alumnos."\n   Mensaje: ".$request->message
        ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail -> to('rdz.marthaelena@gmail.com')-> subject('Mensaje de Contacto');
        });



        return redirect()->back()->with('flash_message','Gracias por Contactarnos. Nos pondremos en contacto contigo lo más pronto posible.');
    }
}
