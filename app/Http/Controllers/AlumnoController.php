<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\DiciplinaAlumno;
use App\Disciplina;
use App\DisciplinaAlumno;
use App\Evaluacion;
use App\Grupo;
use App\GrupoAlumno;
use App\Habilidad;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AlumnoController extends Controller
{
    protected function create(Request $data)
    {

        $alumno = Alumno::create([
            'alu_nombre' => $data['name'],
            'email' => $data['email'],
            'alu_apellido_paterno' => $data['ap_pat'],
            'alu_apellido_materno' => $data['ap_mat'],
            'alu_fecha_nacimiento' => $data['fecha'],
            'alu_biografia' => "",
            'aca_id' => 1,
            'tipo_usuario' => $data['usuario'],
            'password' => Hash::make($data['password']),
        ]);
        $this->generateImage($alumno);
        $dis_alu = DiciplinaAlumno::create([
            'alu_id' => $alumno->id,
            'dis_id' => $data['disciplina']
        ]);

        return redirect()->route('alumnos');
    }
    protected function generateImage($alumno){
        $avatar = new InitialAvatar();
        if (!file_exists(storage_path('app\public\alumnos\\'.$alumno->id))) {
            mkdir(storage_path('app\public\alumnos\\'.$alumno->id));
        }
        $image = $avatar->name($alumno->alu_nombre." ".$alumno->alu_apellido_paterno)
            ->length(2)
            ->fontSize(0.5)
            ->size(450) // 48 * 2
            //            ->background('#EA4C89')
            ->background($this->rand_color())
            ->color('#fff')
            ->generate();
        $image->save(storage_path('app\public\alumnos\\'.$alumno->id.'\perfil.png'));
    }
    function rand_color() {
        $colors = array('#EA4C89', '#49C6E5', '#8965E0', '#FFD166', '#06D6A0');
        $index = array_rand($colors);
        return $colors[$index];
    }
    public function show()
    {
        return view('auth.register');
    }

    public function read(){
        //$alumnos = Alumno::all()->forPage(2, 10);
        $alumnos = Alumno::select('*')
            ->where('tipo_usuario', 'alumno')
            ->paginate(10);
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
        foreach ($request->borrar as $borrar){
            Alumno::all()->find($borrar)->delete();
            $grupos = GrupoAlumno::all()->where('alu_id', $borrar);
            foreach ($grupos as $grupo){
                $grupo->delete();
            }

        }
        return redirect()->route('alumnos');
    }

}