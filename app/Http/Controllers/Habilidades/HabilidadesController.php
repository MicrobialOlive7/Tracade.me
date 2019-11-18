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

      $habilidades = Habilidad::all()->toArray();
    //dd($habilidades);
      return view('Instructor.CrearModHabilidades', [ 'Habilidades' => $habilidades, 'Mod' => '0']);
    }

    public function index(){

        $habilidades = Habilidad::all();
        $disciplinas = Disciplina::all();

        return view('Instructor.Habilidades', compact('habilidades', 'disciplinas'));
    }

    public function delete(Request $request){
      $hab_id = trim((string)$request->input('hab_id'));

      $Habilidad = Habilidad::where('hab_id', $hab_id)->delete();

      dd("dklfj");
      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
      ->where('hab_ant_id', $hab_id)
      ->get();
      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->delete;
      dd($HabReq->toarray());
      dd($Habilidad);

    }

    public function indexModificar($hab_id){
      $Habilidades = Habilidad::all();
      $Habilidad = Habilidad::find($hab_id);
      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)->get();
      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->get();
      $Mod = '1';
      
        return view('Instructor.CrearModhabilidades', compact('CamposAd', 'Habilidad','Habilidades', 'HabReq', 'Mod'));
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

      $hab_nombre = trim((string)$request->input('hab_nombre'));
      $dis_id = trim((string)$request->input('dis_id'));
      $hab_dificultad = trim((string)$request->input('hab_dificultad'));
      $hab_descripcion = trim((string)$request->input('hab_descripcion'));
      $han_id_habilidad_anterior = trim((string)$request->input('han_id_habilidad_anterior'));
      $cad_nombre = $request->input('cad_nombre');
      $cad_contenido = $request->input('cad_contenido');
      $file_img = $request->file('hab_imagen');
      $campos = $request->input('campos');


      try{

        $Habilidad = new Habilidad([
          'hab_nombre' => $hab_nombre,
          'dis_id' => $dis_id,
          'hab_dificultad' => $hab_dificultad,
          'hab_descripcion' => $hab_descripcion
        ]);
        $Habilidad -> save();
      //  $this->storeImage($file_img, $Habilidad->id);

        Storage::disk('local')->put('habilidades/'.$Habilidad->id.'/',$file_img);

        $HabilidadAnterior = new HabilidadAnterior([
          'hab_id' => $Habilidad->id,
          'hab_ant_id' => $han_id_habilidad_anterior
        ]);
        $HabilidadAnterior -> save();

        if($cad_nombre!=null){
            $CampoAdicional = new CampoAdicional([
              'cad_nombre' => $cad_nombre,
              'cad_contenido' => $cad_contenido,
              'hab_id' => $Habilidad->id
            ]);
            $CampoAdicional -> save();
        }

        $Response= [
            'resultado' => [$HabilidadAnterior,$Habilidad],
            'estatus' => 1 ,
            'mensaje'=> 'Habilidad agregada exitosamente.'
        ];


            $HabilidadAnterior = new HabilidadAnterior([
                'hab_id' => $Habilidad->id,
                'hab_ant_id' => $han_id_habilidad_anterior
            ]);
            $HabilidadAnterior -> save();

            if($campos!=null){
                foreach($campos as $key => $values){
                    $CampoAdicional = new CampoAdicional([
                        'cad_nombre' => $values[0],
                        'cad_contenido' => $values[1],
                        'hab_id' => $Habilidad->id
                    ]);
                    $CampoAdicional -> save();
                }
            }

      }catch(Exception $e){
        $Response= [
            'resultado' => [$HabilidadAnterior,$Habilidad],
            'estatus' => 0,
            'mensaje'=> 'Habilidad agregada exitosamente.'
        ];

      }

     return $Response;

    }

}
