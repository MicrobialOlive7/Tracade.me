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
    public function indexCrear(){

      $habilidades = Habilidad::all();
    //dd($habilidades);
      return view('Instructor.CrearHabilidades', compact('habilidades'));
    }

    public function index(){

        $habilidades = Habilidad::all();
        $disciplinas = Disciplina::all();

        return view('Instructor.Habilidades', compact('habilidades', 'disciplinas'));
    }

    public function delete($hab_id){
      $Habilidad = Habilidad::find($hab_id)->delete();

      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
      ->where('hab_ant_id', $hab_id)
      ->delete();

      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->delete();

      $habilidades = Habilidad::all();
      $disciplinas = Disciplina::all();

      return view('Instructor.Habilidades', compact('habilidades', 'disciplinas'));

    }

    public function indexModificar($hab_id){

      $Habilidad = Habilidad::find($hab_id);
      $Habilidades = Habilidad::all();
      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
      ->first();
      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->get()->first();
      //dd($Habilidades,$Habilidad,$HabReq,$CamposAd);
        return view('Instructor.Modhabilidades', compact('CamposAd', 'Habilidad','Habilidades', 'HabReq'));
    }

    public function update (Request $request){
      $hab_id = trim((string)$request->input('hab_id'));
      $hab_nombre = trim((string)$request->input('hab_nombre'));
      $dis_id = trim((string)$request->input('dis_id'));
      $hab_dificultad = trim((string)$request->input('hab_dificultad'));
      $hab_descripcion = trim((string)$request->input('hab_descripcion'));
      $han_id_habilidad_anterior = trim((string)$request->input('han_id_habilidad_anterior'));
      $cad_nombre = $request->input('cad_nombre');
      $cad_contenido = $request->input('cad_contenido');
      $cad_id = $request->input('cad_id');
      $han_id = $request->input('han_id');

      try{

        $Habilidad = Habilidad::where('hab_id', $hab_id)
        ->update([
          'hab_nombre' => $hab_nombre,
          'hab_dificultad' => $hab_dificultad,
          'hab_descripcion' => $hab_descripcion,
          'dis_id' => $dis_id
        ]);

        $HabilidadAnterior = HabilidadAnterior::where('han_id', $han_id)
        ->update([
          'hab_ant_id' => $han_id_habilidad_anterior,
        ]);

        $CampoAdicional = CampoAdicional::where('cad_id', $cad_id)
        ->update([
          'cad_nombre' => $cad_nombre,
          'cad_contenido' => $cad_contenido
        ]);

        $Response= [
            'resultado' => '',
            'estatus' => 1 ,
            'mensaje'=> 'Habilidad modificada exitosamente.'
        ];

      }catch(Exception $e){

        $Response= [
            'resultado' => $e,
            'estatus' => 0 ,
            'mensaje'=> 'Error'
        ];


      }

      return $Request;
    }


    public function create(Request $request){
        $file_img = $request->file('hab_imagen');
        $cad_nombre = $request->input('cad_nombre');
        $cad_contenido = $request->input('cad_contenido');

        $habilidad = new Habilidad();
        $habilidad->hab_nombre = $request->hab_nombre;
        $habilidad->dis_id = $request->dis_id;
        $habilidad->hab_dificultad = $request->hab_dificultad;
        $habilidad->hab_descripcion = $request->hab_descripcion;
        $habilidad->save();

        //$request->file('hab_imagen')->storeAs('local', 'nombrecito.png');

        Storage::disk('local')->putFileAs('habilidades/'.$habilidad->id, $file_img, 'principal.'.$file_img->getClientOriginalExtension() );

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
