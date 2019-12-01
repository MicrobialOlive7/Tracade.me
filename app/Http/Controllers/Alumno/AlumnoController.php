<?php

namespace App\Http\Controllers\Alumno;

use App\Alumno;
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
}