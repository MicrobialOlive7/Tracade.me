<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Disciplina;
use App\Evaluacion;
use App\Habilidad;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function evaluaciones($hab_id, $alu_id){
        $evaluaciones = Evaluacion::select('*')
            ->where('alu_id', $alu_id)
            ->where('hab_id', $hab_id)
            ->orderBy('created_at', 'desc')
            ->get();

        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        return view('Instructor.evaluaciones', compact('evaluaciones', 'alumno', 'habilidad'));
    }

    public function evaluar($hab_id, $alu_id){

        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        return view('Instructor.evaluar', compact('habilidad', 'alumno'));
    }

    public function crearEvaluacion($hab_id, $alu_id, Request $request){

        $evaluacion = new Evaluacion();
        $evaluacion->eva_comentario = $request->eva_comentario;
        $evaluacion->eva_calificacion = $request->eva_calificacion;
        $evaluacion->hab_id = $hab_id;
        $evaluacion->alu_id = $alu_id;
        $evaluacion->save();

        return redirect()->route('evaluaciones', [$hab_id, $alu_id]);
    }

    public function showUpdate($hab_id, $alu_id, $eva_id){
        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        $evaluacion = Evaluacion::all()->find($eva_id);
        return view('Instructor.editar-evaluacion', compact('habilidad', 'alumno', 'evaluacion'));
    }

    public function update($id, $hab_id, $alu_id, Request $request){
        $evaluacion = Evaluacion::all()->find($id);
        $evaluacion->eva_comentario = $request->eva_comentario;
        $evaluacion->eva_calificacion = $request->eva_calificacion;
        $evaluacion->save();

        return redirect()->route('evaluaciones', [$hab_id, $alu_id]);
    }

    public function delete($hab_id, $alu_id, $id){
        Evaluacion::all()->find($id)->delete();

        return redirect()->route('evaluaciones', [$hab_id, $alu_id]);
    }
}
