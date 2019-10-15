<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function create(Request $request){

        $alumno = new Alumno;
        return ($alumno);


    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }
}
