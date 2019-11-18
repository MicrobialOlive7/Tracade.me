<?php

namespace App\Http\Controllers\Auth;

use App\Alumno;
use App\DiciplinaAlumno;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/Alumnos';

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
        $alumno = Alumno::create([
            'alu_nombre' => $data['name'],
            'email' => $data['email'],
            'alu_apellido_paterno' => $data['ap_pat'],
            'alu_apellido_materno' => $data['ap_mat'],
            'alu_fecha_nacimiento' => $data['fecha'],
            'alu_biografia' => "",
            'password' => Hash::make($data['password']),
        ]);

        $dis_alu = DiciplinaAlumno::create([
            'alu_id' => $alumno->id,
            'dis_id' => $data['disciplina']
        ]);

        return $alumno;
    }
}