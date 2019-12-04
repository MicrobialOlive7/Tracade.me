<?php

namespace App\Http\Controllers\Auth;

use App\Academia;
use App\Alumno;
use App\DiciplinaAlumno;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;
use Psy\Input\CodeArgument;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/Precios';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:alumno'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $corte15 = Carbon::create(null, null, 15);
        $corte1 = Carbon::create(null, null, 1);
        if($corte15->diffInDays(Carbon::now()) < $corte1->diffInDays(Carbon::now()))
            $corte = $corte15;
        else
            $corte = $corte1;

        $academia = Academia::create([
            'aca_nombre' => $data['academia'],
            'aca_status' => 'creada',
            'aca_fecha_corte' => $corte,
            'aca_num_alumnos' => 0,
            'aca_adeudo' => 0.00,
        ]);
        $alumno = Alumno::create([
            'alu_nombre' => $data['name'],
            'email' => $data['email'],
            'alu_apellido_paterno' => $data['ap'],
            'alu_apellido_materno' => $data['am'],
            'alu_fecha_nacimiento' => $data['fecha_nac'],
            'alu_biografia' => "",
            'aca_id' => $academia->id,
            'tipo_usuario' => 'admin',
            'password' => Hash::make($data['password']),
        ]);
        $this->generateImage($alumno);


        return $alumno;
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


}