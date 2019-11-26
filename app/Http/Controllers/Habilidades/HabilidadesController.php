<?php

namespace App\Http\Controllers\Habilidades;
use App\Habilidad;
use App\HabilidadAnterior;
use App\Disciplina;
use App\CampoAdicional;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabilidadesController extends Controller
{
    public function showCreate(){

      $habilidades = Habilidad::all();
    //dd($habilidades);
      return view('Instructor.CrearHabilidades', compact('habilidades'));
    }

    public function read(){

        $habilidades = Habilidad::select('*')->paginate(5);
        $disciplinas = Disciplina::all();

        return view('Instructor.habilidades', compact('habilidades', 'disciplinas'));
    }

    public function delete($hab_id){
      $Habilidad = Habilidad::find($hab_id)->delete();

      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
      ->where('hab_ant_id', $hab_id)
      ->delete();

      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->delete();

      $habilidades = Habilidad::all();
      $disciplinas = Disciplina::all();

        return redirect()->route('Habilidades');

    }

    public function showUpdate($hab_id){

      $Habilidad = Habilidad::find($hab_id);
      $Habilidades = Habilidad::all();
      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
      ->first();
      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->get()->first();
      //dd($Habilidades,$Habilidad,$HabReq,$CamposAd);
        return view('Instructor.Modhabilidades', compact('CamposAd', 'Habilidad','Habilidades', 'HabReq', 'hab_id'));
    }

    public function update (Request $request, $id){

        $file_img = $request->file('hab_imagen');
        $cad_nombre = $request->input('cad_nombre');
        $cad_contenido = $request->input('cad_contenido');
        if ($file_img!=null){
            $file_name = 'principal.'.$file_img->getClientOriginalExtension();
        }

        $habilidad = Habilidad::all()->find($id);
        $habilidad->hab_nombre = $request->hab_nombre;
        $habilidad->dis_id = $request->dis_id;
        $habilidad->hab_dificultad = $request->hab_dificultad;
        $habilidad->hab_descripcion = $request->hab_descripcion;
        if ($file_img!=null) {
            Storage::disk('public')->putFileAs('habilidades/'.$habilidad->id, $file_img, $file_name );
            $habilidad->hab_imagen = $file_name;
        }
        $habilidad->save();

        //$request->file('hab_imagen')->storeAs('local', 'nombrecito.png');




        // if $request->habilidadAanterior
        //modificar $requests
        $habilidadAnt = HabilidadAnterior::all()->where('hab_id', $id)->first();
        $habilidadAnt->hab_id = $habilidad->id;
        $habilidadAnt->hab_ant_id = $request->hab_id;
        $habilidadAnt->save();

        if($cad_nombre!=null){
            //modificar $requests
            $campoAdicional = CampoAdicional::all()->where('hab_id', $id)->first();;
            $campoAdicional->cad_nombre = $cad_nombre;
            $campoAdicional->cad_contenido = $cad_contenido;
            $campoAdicional->hab_id = $habilidad->id;
            $campoAdicional->save();
        }
        return redirect()->route('Habilidades');

    }


    public function create(Request $request){
        $file_img = $request->file('hab_imagen');
        $cad_nombre = $request->input('cad_nombre');
        $cad_contenido = $request->input('cad_contenido');
        $file_name = 'principal.'.$file_img->getClientOriginalExtension();

        $habilidad = new Habilidad();
        $habilidad->hab_nombre = $request->hab_nombre;
        $habilidad->dis_id = $request->dis_id;
        $habilidad->hab_dificultad = $request->hab_dificultad;
        $habilidad->hab_descripcion = $request->hab_descripcion;
        $habilidad->hab_imagen = $file_name;
        $habilidad->save();

        //$request->file('hab_imagen')->storeAs('local', 'nombrecito.png');


        Storage::disk('public')->putFileAs('habilidades/'.$habilidad->id, $file_img, $file_name );

        // if $request->habilidadAanterior
        //modificar $requests
        $habilidadAnt = new HabilidadAnterior();
        $habilidadAnt->hab_id = $habilidad->id;
        $habilidadAnt->hab_ant_id = $request->hab_id;
        $habilidadAnt->save();

        if($cad_nombre!=null){
            //modificar $requests
            $campoAdicional = new CampoAdicional();
            $campoAdicional->cad_nombre = $cad_nombre;
            $campoAdicional->cad_contenido = $cad_contenido;
            $campoAdicional->hab_id = $habilidad->id;
            $campoAdicional->save();
        }
        return redirect()->route('Habilidades');
    }

}
