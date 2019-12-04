<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Disciplina;
use App\Evaluacion;
use App\GrupoAlumno;
use App\Habilidad;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function read($hab_id, $alu_id){
        $evaluaciones = Evaluacion::select('*')
            ->where('alu_id', $alu_id)
            ->where('hab_id', $hab_id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        return view('Instructor.evaluaciones', compact('evaluaciones', 'alumno', 'habilidad'));
    }

    public function showCreate($hab_id, $alu_id){

        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        return view('Instructor.CrearEvaluacion', compact('habilidad', 'alumno'));
    }

    public function create($hab_id, $alu_id, Request $request){

        try{

          $this->validate($request,[
              'eva_comentario' => 'required',
              'eva_calificacion' => 'required'
          ]);

          $evaluacion = new Evaluacion();
          $evaluacion->eva_comentario = $request->eva_comentario;
          $evaluacion->eva_calificacion = $request->eva_calificacion;
          $evaluacion->hab_id = $hab_id;
          $evaluacion->alu_id = $alu_id;
          $evaluacion->save();

          return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('flash_message', 'Evaluación creada con éxito');

        }catch(\Throwable $ex){

          return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('error_message', 'Hubo un error, inténtalo más tarde.');
        }
    }

    public function showUpdate($hab_id, $alu_id, $eva_id){
        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        $evaluacion = Evaluacion::all()->find($eva_id);
        return view('Instructor.ModEvaluacion', compact('habilidad', 'alumno', 'evaluacion'));
    }

    public function update($id, $hab_id, $alu_id, Request $request){

      try{

        $this->validate($request,[
            'eva_comentario' => 'required',
            'eva_calificacion' => 'required'
        ]);

        $evaluacion = Evaluacion::all()->find($id);
        $evaluacion->eva_comentario = $request->eva_comentario;
        $evaluacion->eva_calificacion = $request->eva_calificacion;
        $evaluacion->save();

        return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('flash_message', 'Evaluación modificada con éxito.');

      }catch(\Throwable $ex){

        return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('error_message', 'Hubo un error, inténtalo más tarde.');

      }
    }

    public function delete($hab_id, $alu_id, $id){

      try{
        Evaluacion::all()->find($id)->delete();

        return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('flash_message', 'Evaluación eliminada con éxito.');

      }catch(\Throwable $ex){
        return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('error_message', 'Hubo un error, inténtalo más tarde.');


      }

    }

    public function multipleDelte(Request $request, $hab_id, $alu_id){

      try{
        foreach ($request->borrar as $borrar){
            Evaluacion::all()->find($borrar)->delete();
        }

        return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('flash_message', 'Evaluaciones eliminadas con éxito.');

      }catch(\Throwable $ex){

        return redirect()->route('evaluaciones', [$hab_id, $alu_id])->with('select_error', 'Hubo un error, verifica que has seleccionado más de una evaluación.');

      }

    }
}
