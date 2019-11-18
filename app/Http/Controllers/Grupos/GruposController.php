<?php

namespace App\Http\Controllers\Grupos;
use App\Grupo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GruposController extends Controller
{
    public function show(){
        return view('instructor.CrearGrupos');
    }
    public function create(Request $request){
        //return $request;
        $grupo = new Grupo();
        $grupo->gru_nombre = $request->gru_nombre;
        $grupo->gr_dia = $request->gru_dia;
        $grupo->gru_hora = "2000-01-01 ".$request->hora.":".$request->min.":00";
        $grupo->dis_id = $request->dis_id;
        $grupo->aul_id = 1;
        $grupo->save();
        return redirect()->route('grupos');
    }

    public function delete($id){
        Grupo::all()->find($id)->delete();
        return redirect()->route('grupos');
    }

    public function index(){

      $Grupos = Grupo::all();

      return view('Instructor.grupos',compact('Grupos') );

    }

    public function indexMod($gru_id){

      $GrupoInfo = Grupo::where('gru_id', $gru_id)->get()->toArray();
      $horario = explode(' ',$GrupoInfo[0]['gru_horario']);
      $dia= $horario[0];
      $hora_de = explode(':',$horario[1])[0];
      $min_de = explode(':',$horario[1])[1];
      $hora_a = explode(':',$horario[3])[0];
      $min_a = explode(':',$horario[3])[1];


      return view('Instructor.CrearModGrupos', [ 'Grupo' => $GrupoInfo[0], 'Mod'=>'1', 'Horario' => [$dia, $hora_de, $min_de, $hora_a, $min_a] ]);
    }

    /*public function delete(Request $request){
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


    }*/

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



}
