<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Plan::class, function (Faker $faker) {
    return [
        'pla_nombre' => $faker->sentence(2),
        'pla_tipo_plan' => 'estandar',
        'pla_precio' => 300,
        'pla_descripcion' => $faker->sentence(7),
        'pla_numero_alumnos' => 100,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
