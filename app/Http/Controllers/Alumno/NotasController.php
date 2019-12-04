<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use App\Nota;
use App\Notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

class NotasController extends Controller
{

    public function create(Request $request,$hab_id,$alu_id){
        $this->validate($request,[
            'nota' => 'required'
        ]);
        try{
            $nota = new Nota();
            $nota-> not_nota = $request -> nota;
            $nota-> hab_id = $hab_id;
            $nota-> alu_id = $alu_id;
            $nota-> save();
            return redirect()->route('alumno-detalle', $alu_id)->with('flash_message', 'Se ha creado la habilidad con éxito');
        }catch (\Throwable $ex){
            return redirect()->route('alumno-detalle', $alu_id)->with('error_message', 'Hubo un error, intentalo más tarde');
        }

    }
    public function delete($id,$alu_id){

        try{
           $del= Nota::find($id)->delete();

            return redirect()->route('alumno-detalle',$alu_id)->with('flash_message', 'Nota eliminada con éxito.');
        }catch(\Throwable $ex){
            return redirect()->route('alumno-detalle',$alu_id)->with('error_message', 'Hubo un error, inténtalo más tarde.');
        }
    }
}
