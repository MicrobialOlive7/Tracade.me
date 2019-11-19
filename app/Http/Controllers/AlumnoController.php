<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Disciplina;
use App\DisciplinaAlumno;
use App\GrupoAlumno;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AlumnoController extends Controller
{

    public function show(){
        $alumnos = Alumno::all();
        $disciplinas = Disciplina::all();
        $dis_alu = DisciplinaAlumno::all();
        return view('Instructor.alumnos', compact('alumnos', 'disciplinas', 'dis_alu'));
    }

    public function showUpdate($id){
        $alumno = Alumno::all()->find($id);
        $disciplinas = Disciplina::all();
        $dis_alu = DisciplinaAlumno::all();
        return view('Instructor.ModAlumno', compact('alumno', 'disciplinas', 'dis_alu', 'id'));
    }

    public function update(Request $request, $id){
        $alumno = Alumno::all()->find($id);
        $alumno->alu_nombre = $request['name'];
        $alumno->email = $request['email'];
        $alumno->alu_apellido_paterno = $request['alu_apellido_paterno'];
        $alumno->alu_apellido_materno = $request['alu_apellido_materno'];
        $alumno->alu_fecha_nacimiento = $request['alu_fecha_nacimiento'];
        $alumno->save();

        return redirect()->route('alumnos');
    }

    public function delete($id){
        Alumno::all()->find($id)->delete();
        $grupos = GrupoAlumno::all()->where('alu_id', $id);
        foreach ($grupos as $grupo){
            $grupo->delete();
        }
        return redirect()->route('alumnos');
    }

}