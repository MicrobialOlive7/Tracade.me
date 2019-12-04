<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use App\Notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotasController extends Controller
{

    public function create(Request $request){
        $this->validate($request,[
            'nota' => 'required'
        ]);

        $nota = $request->input('nota');
            $notas = new nota();
            $notas-> $request->$nota;
            $notas-> save();

            return redirect()->route('alumno-detalle')->with('flash_message', 'Se ha creado la habilidad con éxito');
    }


}
