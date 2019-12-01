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
        $alumnos = Alumno::select('*')->paginate(5);
        //return $alumnos;
        $disciplinas = Disciplina::all();
        $dis_alu = DisciplinaAlumno::all();
        $grupos = Grupo::all();
        $gru_alu = GrupoAlumno::all();
        return view('Instructor.alumnos', compact('alumnos', 'disciplinas', 'dis_alu', 'grupos', 'gru_alu'));
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

    protected function test(){
        $avatar = new InitialAvatar();
        $image = $avatar->name('Lasse Rafn')
            ->length(2)
            ->fontSize(0.5)
            ->size(96) // 48 * 2
            ->background('#8BC34A')
            ->color('#fff')
            ->generate()
            ->stream('png', 100);
        return $image->stream('png', 100);
        //$file_name = $image->filename;
        //return $image;
        Storage::disk('public')->putFileAs('alumnos/1', $image, 'asd.png' );
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
        $habilidades = Habilidad::select('*')
                        ->whereNotIn('id', $ids)
                        ->where('dis_id', $disciplina->dis_id)
                        ->paginate(5);
        $hab_apr = Habilidad::all()->whereIn('id',$ids);

        $disciplinas = Disciplina::all();

        $eva_3 = Evaluacion::all()->where('eva_calificacion', 3);
        foreach ($eva_3 as $evaluacion){
            array_push($ids, $evaluacion->hab_id);
        }
        $hab_aprendidas = Habilidad::all()->whereIn('id', $ids);
        //return $hab_aprendidas;
        return view('Instructor.habilidades-alumno', compact('alumno', 'habilidades', 'disciplinas', 'evaluaciones', 'hab_apr'));
    }

}