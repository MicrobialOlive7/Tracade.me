<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function show(){

    }

    public function create(Request $request){
        $evento = new Evento();
        $evento->eve_nombre = $request->nombre;
        $evento->eve_fecha = $request->fecha;
        $evento->eve_descripcion = $request->descripcion;
        $evento->gru_id = $request->grupo;
        $evento->save();
        return $evento;
    }

    public function update(Request $request, $id){
        $evento = Evento::all()->find($id);
        $evento->eve_nombre = $request->nombre;
        $evento->eve_fecha = $request->fecha;
        $evento->eve_descripcion = $request->descripcion;
        $evento->gru_id = $request->grupo;
        $evento->save();
        return $evento;
    }

    public function delete($id){
        Evento::all()->find($id)->delete();
        //return redirect()->route('alumnos');
    }


}
