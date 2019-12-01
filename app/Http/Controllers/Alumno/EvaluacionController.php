<?php

namespace App\Http\Controllers\Alumno;

use App\Alumno;
use App\Evaluacion;
use App\Habilidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function read($hab_id){
        $alu_id = Auth::user()->id;
        $evaluaciones = Evaluacion::select('*')
            ->where('alu_id', $alu_id)
            ->where('hab_id', $hab_id)
            ->orderBy('created_at', 'desc')
            ->get();

        $alumno = Alumno::all()->find($alu_id);
        $habilidad = Habilidad::all()->find($hab_id);
        return view('Alumno.evaluaciones', compact('evaluaciones', 'alumno', 'habilidad'));
    }
}
