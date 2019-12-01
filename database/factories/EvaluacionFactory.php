<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DisciplinaAlumno;
use App\Habilidad;
use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Evaluacion::class, function (Faker $faker) {
    $alumno = \App\Alumno::all()->random(1)->first();
    $dis_alu = \App\DisciplinaAlumno::all()->where('alu_id', $alumno->id)->first();
    $disciplina = \App\Disciplina::all()->where('id', $dis_alu->dis_id)->first();
    $habilidad = Habilidad::all()->where('dis_id', $dis_alu->dis_id)->random(1)->first();
    //echo "//".$habilidad->dis_id." ".$habilidad->id." - ".$dis_alu->dis_id."//\n";

    return [
        'eva_comentario' => $faker->sentence(5),
        'eva_calificacion' => rand(1, 3),
        'hab_id' => $habilidad->id,
        'alu_id' => $alumno->id,
        'created_at' => \Carbon\Carbon::createFromDate(null, rand(1,12), rand(1, 28)),
        'updated_at' => \Carbon\Carbon::createFromDate(null, rand(1,12), rand(1, 28)),
    ];
});
