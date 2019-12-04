<?php

namespace App\Http\Controllers\Alumno;

use App\Alumno;
use App\DiciplinaAlumno;
use App\Disciplina;
use App\DisciplinaAlumno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    public function update(Request $request){
        $alumno = Alumno::all()->find(Auth::user()->id);
        if(isset($request->password)){
            $alumno->password = Hash::make($request->password);
        }

        $alumno->alu_biografia = $request['bio'];
        $alumno->save();

        return redirect()->route('alumno-perfil');
    }

    public function showPerfil(){
        $dis_alu = DisciplinaAlumno::all()->where('alu_id', Auth::user()->id)->first();
        $disciplina = Disciplina::all()->find($dis_alu->dis_id);
        //return $disciplina;
        return view('Alumno.perfil', compact('disciplina'));
    }
}
