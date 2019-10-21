<?php

namespace App\Http\Controllers\Habilidades;
use App\Habilidad;
use App\HabilidadAnterior;
use App\Disciplina;
use App\CampoAdicional;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabilidadesController extends Controller
{
    public function indexCrear(){

      $Habilidades = Habilidad::all()->toArray();

      return view('Instructor.CrearModHabilidades', [ 'Habilidades' => $Habilidades, 'Mod' => '0']);
    }

    public function index(){

        $Habilidades = Habilidad::all()->toArray();
        $Disciplinas = Disciplina::all()->toArray();



        foreach($Habilidades as $key_hab => $value_hab){
          array_push($Habilidades[$key_hab], 'dis_nombre');
          foreach($Disciplinas as $key_dis => $value_dis){
            if($value_dis['dis_id'] == $value_hab['dis_id']){
              $Habilidades[$key_hab]['dis_nombre'] = $value_dis['dis_nombre'];
            }
          }
        }


        return view('Instructor.Habilidades', ['Habilidades' => $Habilidades]);
    }

    public function indexModificar($hab_id){
      $Habilidades = Habilidad::all()->toArray();
      $Habilidad = Habilidad::where('hab_id', $hab_id)->get()->toArray();
      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)->get()->toArray();
      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->get()->toArray();
        return view('Instructor.CrearModhabilidades', ['CamposAd'=>$CamposAd,'Habilidad' => $Habilidad, 'Habilidades' => $Habilidades, 'HabReq' => $HabReq, 'Mod'=>'1']);
    }


    public function create(Request $request){
      $hab_nombre = trim((string)$request->input('hab_nombre'));
      $dis_id = trim((string)$request->input('dis_id'));
      $hab_dificultad = trim((string)$request->input('hab_dificultad'));
      $hab_descripcion = trim((string)$request->input('hab_descripcion'));
      $han_id_habilidad_anterior = trim((string)$request->input('han_id_habilidad_anterior'));
      $campos = $request->input('campos');


      try{

        $Habilidad = new Habilidad([
          'hab_nombre' => $hab_nombre,
          'dis_id' => $dis_id,
          'hab_dificultad' => $hab_dificultad,
          'hab_descripcion' => $hab_descripcion
        ]);
        $Habilidad -> save();

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
        dd($campos,$han_id_habilidad_anterior);
        $Response= [
            'resultado' => [$HabilidadAnterior,$Habilidad],
            'estatus' => 1 ,
            'mensaje'=> 'Grupo agregado exitosamente.'
        ];


      }catch(Exception $e){

dd($e);
      }

    }
}
