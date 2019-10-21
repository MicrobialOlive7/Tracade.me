<?php

namespace App\Http\Controllers\Grupos;
use App\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GruposController extends Controller
{


    public function index(){

      $Grupos = Grupo::all()->toArray();

      return view('Instructor.grupos',['Grupos' => $Grupos] );

    }

    public function indexMod($gru_id){

      $GrupoInfo = Grupo::where('gru_id', $gru_id)->get();
      return view('Instructor.CrearModGrupos', [ 'Grupo' => $GrupoInfo, 'Mod'=>'1']);
    }

    public function delete(Request $request){
      $gru_id = trim((string)$request->input('gru_id'));

      try{
        $Grupo = Grupo::where('gru_id', $gru_id)->delete();

        $Response= [
            'resultado' => $Grupo,
            'estatus' => 1 ,
            'mensaje'=> 'Grupo modificado exitosamente.'
        ];

      }catch(Exception $e){

        $Response= [
            'resultado' => $e,
            'estatus' => 0 ,
            'mensaje'=> 'Error'
        ];

      }

      return $Response;


    }

    public function update(Request $request){
      $gru_nombre = trim((string)$request->input('gru_nombre'));
      $gru_horario = trim((string)$request->input('gru_horario'));
      $dis_id = trim((string)$request->input('dis_id'));
      $aul_id = trim((string)$request->input('aul_id'));
      $gru_id = trim((string)$request->input('gru_id'));

      try{

        $Grupo = Grupo::where('gru_id', $gru_id)
        ->update([
          'gru_nombre' => $gru_nombre,
          'gru_horario' => $gru_horario,
          'dis_id' => $dis_id,
          'aul_id' => $aul_id
        ]);

        $Response= [
            'resultado' => $Grupo,
            'estatus' => 1 ,
            'mensaje'=> 'Grupo modificado exitosamente.'
        ];

      }catch(Exception $e){

        $Response= [
            'resultado' => $e,
            'estatus' => 0 ,
            'mensaje'=> 'Error'
        ];


      }

      return $Response;

    }

    public function create(Request $request){

      $gru_nombre = trim((string)$request->input('gru_nombre'));
      $gru_horario = trim((string)$request->input('gru_horario'));
      $dis_id = trim((string)$request->input('dis_id'));
      $aul_id = trim((string)$request->input('aul_id'));

      try{

        $Grupo = new Grupo([
          'gru_nombre' => $gru_nombre,
          'gru_horario' => $gru_horario,
          'dis_id' => $dis_id,
          'aul_id' => $aul_id
        ]);
        $Grupo -> save();

        $Response= [
            'resultado' => $Grupo,
            'estatus' => 1 ,
            'mensaje'=> 'Grupo agregado exitosamente.'
        ];

      }catch(Exception $e){

        $Response= [
            'resultado' => $e,
            'estatus' => 0 ,
            'mensaje'=> 'Error'
        ];


      }

      return $Response;


    }


}
