<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Habilidad::class, function (Faker $faker) {
    $disciplinaId = \App\Disciplina::where('dis_nombre', 'Pole Fitness')->value('id');
    return [
        'hab_nombre' => $faker->sentence(2),
        'hab_dificultad' => rand(1,3),
        'hab_descripcion' => $faker->sentence(10),
        'hab_imagen' => $faker->sentence(2),
        'hab_video' => $faker->sentence(2),
        'dis_id' => $disciplinaId,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
