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
        $habilidades = Habilidad::all()->whereNotIn('id', $ids)->whereIn('dis_id', $disciplina->dis_id);
        $hab_apr = Habilidad::all()->whereIn('id',$ids);

        $disciplinas = Disciplina::all();
        return view('Alumno.habilidades-alumno', compact('alumno', 'habilidades', 'disciplinas', 'evaluaciones', 'hab_apr'));


    }




}
