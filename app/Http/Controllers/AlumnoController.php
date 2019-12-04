<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Disciplina;
use App\DisciplinaAlumno;
use App\Evaluacion;
use App\Grupo;
use App\GrupoAlumno;
use App\Habilidad;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AlumnoController extends Controller
{

    public function read(){
        //$alumnos = Alumno::all()->forPage(2, 10);
        $alumnos = Alumno::select('*')->paginate(10);
        //return $alumnos;
        $disciplinas = Disciplina::all();
        $dis_alu = DisciplinaAlumno::all();
        $grupos = Grupo::all();
        $gru_alu = GrupoAlumno::all();
        $evaluaciones = Evaluacion::all();
        $habilidades = Habilidad::all();
        $habilidadesT = Evaluacion::where('eva_calificacion', 3)->orderBy('created_at','desc')->get();
        return view('Instructor.alumnos', compact('alumnos', 'disciplinas', 'dis_alu', 'grupos', 'gru_alu', 'evaluaciones', 'habilidades', 'habilidadesT'));
    }

    public function showUpdate($id){
        $alumno = Alumno::all()->find($id);
        $disciplinas = Disciplina::all();
        $dis_alu = DisciplinaAlumno::all();
        return view('Instructor.ModAlumno', compact('alumno', 'disciplinas', 'dis_alu', 'id'));
    }

    public function update(Request $request, $id){


      try{


        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'alu_apellido_paterno' => 'required',
            'alu_apellido_materno' => 'required',
            'alu_fecha_nacimiento' => 'required'
        ]);

        $alumno = Alumno::all()->find($id);
        $alumno->alu_nombre = $request['name'];
        $alumno->email = $request['email'];
        $alumno->alu_apellido_paterno = $request['alu_apellido_paterno'];
        $alumno->alu_apellido_materno = $request['alu_apellido_materno'];
        $alumno->alu_fecha_nacimiento = $request['alu_fecha_nacimiento'];
        $alumno->save();

        return redirect()->route('alumnos')->with('flash_message', 'Alumno actualizado con éxito.');

      }catch(\Throwable $ex){
        dd($ex);
        return redirect()->route('alumnos')->with('error_message', 'Hubo un error al actualizar el alumno, intenta más tarde.');
      }

    }

    public function delete($id){

      try{

        Alumno::all()->find($id)->delete();
        $grupos = GrupoAlumno::all()->where('alu_id', $id);
        foreach ($grupos as $grupo){
            $grupo->delete();
        }
          return redirect()->route('alumnos')->with('flash_message', 'Alumno eliminado con éxito.');
      }catch(\Throwable $ex){
        return redirect()->route('alumnos')->with('error_message', 'Hubo un error, inténtalo más tarde.');
      }

    }



    protected function habilidades($id){
        $evaluaciones = Evaluacion::select('*')->where('alu_id', $id)->orderBy('created_at', 'desc')->get();
        //return $evaluaciones;
        $ids = array();
        foreach ($evaluaciones as $evaluacion){
            array_push($ids, $evaluacion->hab_id);
        }

        $disciplina = DisciplinaAlumno::all()->where('alu_id', $id)->first();

        $alumno = Alumno::all()->find($id);
        $hab_apr = Habilidad::select('*')->whereIn('id',$ids)->paginate(5,['*'], 'habilidades');
        $habilidades = Habilidad::select('*')
                        ->whereNotIn('id', $ids)
                        ->where('dis_id', $disciplina->dis_id)
                        ->paginate(5,['*'], 'disponibles');


        $disciplinas = Disciplina::all();

        $eva_3 = Evaluacion::all()->where('eva_calificacion', 3);
        foreach ($eva_3 as $evaluacion) {
            array_push($ids, $evaluacion->hab_id);
        }
        return view('Instructor.habilidades-alumno', compact('alumno', 'habilidades', 'disciplinas', 'evaluaciones', 'hab_apr'));
    }

    public function multipleDelte(Request $request){

      try{

        foreach ($request->borrar as $borrar){
            Alumno::all()->find($borrar)->delete();
            $grupos = GrupoAlumno::all()->where('alu_id', $borrar);
            foreach ($grupos as $grupo){
                $grupo->delete();
            }

        }

        return redirect()->route('alumnos')->with('flash_message', 'Alumnos eliminados con éxito');

      }catch(\Throwable $ex){

        return redirect()->route('alumnos')->with('error_message', 'Hubo un error, asegúrate de seleccionar al menos un alumno.');

      }


    }

}
