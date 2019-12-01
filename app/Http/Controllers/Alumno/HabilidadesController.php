<?php

namespace App\Http\Controllers\Alumno;

use App\Alumno;
use App\Disciplina;
use App\DisciplinaAlumno;
use App\Evaluacion;
use App\Habilidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HabilidadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function read(){
        $id = Auth::user()->id;
        $evaluaciones = Evaluacion::select('*')->where('alu_id', $id)->orderBy('created_at', 'desc')->get();
        //return $evaluaciones;
        $ids = array();
        foreach ($evaluaciones as $evaluacion){
            array_push($ids, $evaluacion->hab_id);
        }

        $disciplina = DisciplinaAlumno::all()->where('alu_id', $id)->first();

        $alumno = Alumno::all()->find($id);
        $habilidades = Habilidad::select('*')
            ->whereNotIn('id', $ids)
            ->where('dis_id', $disciplina->dis_id)
            ->paginate(5,['*'], 'disponibles');
        $hab_apr = Habilidad::whereIn('id',$ids)->paginate(5,['*'], 'habilidades');

        $disciplinas = Disciplina::all();

        $eva_3 = Evaluacion::all()->where('eva_calificacion', 3);
        foreach ($eva_3 as $evaluacion){
            array_push($ids, $evaluacion->hab_id);
        }
        return view('Alumno.habilidades-alumno', compact('alumno', 'habilidades', 'disciplinas', 'evaluaciones', 'hab_apr'));


    }




}
