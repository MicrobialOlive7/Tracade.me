<?php

namespace App\Http\Controllers\Habilidades;
use App\Alumno;
use App\Evaluacion;
use App\GrupoAlumno;
use App\Habilidad;
use App\HabilidadAnterior;
use App\Disciplina;
use App\CampoAdicional;
use Illuminate\Support\Facades\DB;
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

        $habilidades = Habilidad::select('*')->paginate(10);
        $disciplinas = Disciplina::all();

        return view('Instructor.habilidades', compact('habilidades', 'disciplinas'));
    }


    public function detailread($id){

        $habilidad = Habilidad::all()->find($id);
        $hab_anterior = DB::table('habilidad_anterior')->join('habilidad', 'hab_id', '=', 'habilidad.id') -> get() -> first();
        $evaluacion = DB::table('habilidad')->join('evaluacion', 'habilidad.id', '=', 'hab_id') -> where('alu_id', $id) -> orderBy('evaluacion.created_at','desc')->get() -> first();

        return view('Instructor.detalle_hab', compact('habilidad', 'hab_anterior','evaluacion'));


    }

    public function delete($hab_id){
        try{

          $Habilidad = Habilidad::where('id',$hab_id)->delete();

          $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
          ->where('hab_ant_id', $hab_id)->first();
          if($HabReq != null){

            $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
            ->where('hab_ant_id', $hab_id)->delete();
          }


          $CamposAd = CampoAdicional::where('hab_id', $hab_id)->first();
          if($CamposAd != null){
              $CamposAd = CampoAdicional::where('hab_id', $hab_id)->first()->delete();
          }

          $evaluaciones = Evaluacion::all()->where('hab_id', $hab_id);
          if(count($evaluaciones) > 0){
            $evaluaciones = Evaluacion::where('hab_id', $hab_id)->delete();
          }

          $habilidades = Habilidad::all();
          $disciplinas = Disciplina::all();

          return redirect()->route('Habilidades')->with('success_delete_msg', 'Se ha eliminado la habilidad con éxito');
        }catch(\Throwable $ex){
          return redirect()->route('Habilidades')->with('error_delete_msg', 'Hubo un error al eliminar la habilidad.');
        }
    }

    public function showUpdate($hab_id){

      $Habilidad = Habilidad::find($hab_id);
      $Habilidades = Habilidad::all();
      $HabReq = HabilidadAnterior::where('hab_id', $hab_id)
      ->first();
      $CamposAd = CampoAdicional::where('hab_id', $hab_id)->get()->first();
      //dd($Habilidades,$Habilidad,$HabReq,$CamposAd);
        return view('Instructor.ModHabilidades', compact('CamposAd', 'Habilidad','Habilidades', 'HabReq', 'hab_id'));
    }

    public function update (Request $request, $id){

        $this->validate($request,[
            'hab_nombre' => 'required',
            'dis_id' => 'required',
            'hab_descripcion' => 'required',
            'hab_dificultad' => 'required'
        ]);

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

        if($request->hab_id == ""){
          //Quitar hab hab_ant_id
          //No hacer nada
          $habilidadAnt = HabilidadAnterior::all()->where('hab_id', $id)->first();
          if($habilidadAnt != null){
              $habilidadAnt = HabilidadAnterior::where('hab_id', $id)->first()->delete();
          }
        }else{

          $habilidadAnt = HabilidadAnterior::all()->where('hab_id', $id)->first();

          if($habilidadAnt != null){
            //Cambiar
            $habilidadAnt->hab_id = $habilidad->id;
            $habilidadAnt->hab_ant_id = $request->hab_id;
            $habilidadAnt->save();

          }else{
          //dar de alta
            $newHabilidadAnt = new HabilidadAnterior();
            $newHabilidadAnt->hab_id = $habilidad->id;
            $newHabilidadAnt->hab_ant_id = $request->hab_id;
            $newHabilidadAnt->save();
          }
        }


        if($cad_nombre == ""){
            //modificar $requests
            $campoAdicional = CampoAdicional::all()->where('hab_id', $id)->first();

            if($campoAdicional != null){
              $campoAdicional->delete();
            }
        }else{

            $campoAdicional = CampoAdicional::all()->where('hab_id', $id)->first();
            if($campoAdicional != null){

              $campoAdicional->cad_nombre = $cad_nombre;
              $campoAdicional->cad_contenido = $cad_contenido;
              $campoAdicional->hab_id = $habilidad->id;
              $campoAdicional->save();

            }else{

              $newCampoAdicional = new CampoAdicional();
              $newCampoAdicional->cad_nombre = $cad_nombre;
              $newCampoAdicional->cad_contenido = $cad_contenido;
              $newCampoAdicional->hab_id = $habilidad->id;
              $newCampoAdicional->save();

            }
        }

        return redirect()->route('Habilidades')->with('flash_message', 'Habilidad modificada con éxito.');

    }


    public function create(Request $request){

        $this->validate($request,[
            'hab_nombre' => 'required',
            'dis_id' => 'required',
            'hab_descripcion' => 'required',
            'hab_imagen' => 'required',
            'hab_dificultad' => 'required'
        ]);

        $file_img = $request->file('hab_imagen');
        $cad_nombre = $request->input('cad_nombre');
        $cad_contenido = $request->input('cad_contenido');
        $file_name = 'principal.'.$file_img->getClientOriginalExtension();

        $file_video = $request->file('hab_video');
        $name = $_FILES['hab_video']['name'];
        $videoname = explode(".", $name);

        $filename =$videoname[0].'.'.$file_video->getClientOriginalExtension();


        $habilidad = new Habilidad();
        $habilidad->hab_nombre = $request->hab_nombre;
        $habilidad->dis_id = $request->dis_id;
        $habilidad->hab_dificultad = $request->hab_dificultad;
        $habilidad->hab_descripcion = $request->hab_descripcion;
        $habilidad->hab_imagen = $file_name;
        $habilidad->hab_video = $filename;
        $habilidad->save();

        //$request->file('hab_imagen')->storeAs('local', 'nombrecito.png');
        Storage::disk('public')->putFileAs('habilidades/'.$habilidad->id, $file_img, $file_name );
        Storage::disk('public')->putFileAs('habilidades/'.$habilidad->id, $file_video, $filename);

        // if $request->habilidadAanterior
        //modificar $requests

        if( $request->hab_id != ""){
          $habilidadAnt = new HabilidadAnterior();
          $habilidadAnt->hab_id = $habilidad->id;
          $habilidadAnt->hab_ant_id = $request->hab_id;
          $habilidadAnt->save();
        }


        if($cad_nombre!= ""){
            //modificar $requests
            $campoAdicional = new CampoAdicional();
            $campoAdicional->cad_nombre = $cad_nombre;
            $campoAdicional->cad_contenido = $cad_contenido;
            $campoAdicional->hab_id = $habilidad->id;
            $campoAdicional->save();
        }

        return redirect()->route('Habilidades')->with('flash_message', 'Se ha creado la habilidad con éxito');
    }

    public function multipleDelte(Request $request){

        try{
            foreach ($request->borrar as $borrar){

                Habilidad::all()->find($borrar)->delete();
                HabilidadAnterior::where('hab_id', $borrar)
                    ->where('hab_ant_id', $borrar)
                    ->delete();
                CampoAdicional::where('hab_id', $borrar)->delete();
                $eva = Evaluacion::where('hab_id', $borrar)->get();
                foreach ($eva as $e){
                    $e->delete();
                }
              }
              return redirect()->route('Habilidades')->with('select_success', 'Habilidades eliminadas con éxito.');

        }catch(\Throwable $ex){
          return redirect()->route('Habilidades')->with('select_error', 'Hubo un error, asegúrate de seleccionar al menos una habilidad .');
        }
    }

}
