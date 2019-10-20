<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function create(Request $request){
       $alu_nombre = trim((string)$request->input('alu_nombre'));
       $alu_correo_electronico = trim((string)$request->input('alu_correo_electronico'));
       $alu_password = trim((string)$request->input('alu_password'));
       $alu_apellido_paterno = trim((string)$request->input('alu_apellido_paterno'));
       $alu_apellido_materno = trim((string)$request->input('alu_apellido_materno'));
       $alu_fecha_nacimiento = trim((string)$request->input('alu_fecha_nacimiento'));

       try{

         $Alumno = new Alumno([
           'alu_nombre' => 'Valreia',
           'alu_correo_electronico' => 'vale_icha',
           'alu_password' => 'password',
           'alu_apellido_paterno' => 'aa',
           'alu_apellido_materno' => '$alu_apellido_materno',
           'alu_fecha_nacimiento' => '$alu_fecha_nacimiento',
         ]);
         $Alumno->save();

         return response()->json([
           'id' -> $Alumno->id
         ], 201);

       }catch(Exception $e){
         return $e;
       }
    }

}
