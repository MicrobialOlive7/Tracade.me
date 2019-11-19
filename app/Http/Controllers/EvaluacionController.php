<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function evaluaciones(){
        $evaluaciones = Evaluacion::all();
        return view('Instructor.evaluaciones', compact('evaluaciones'));
    }
}
