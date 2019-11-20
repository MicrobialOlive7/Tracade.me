<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Alumno::class, function (Faker $faker) {
    return [
        'alu_nombre' => $faker->firstName,
        'alu_apellido_paterno' => $faker->lastName,
        'alu_apellido_materno' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'alu_fecha_nacimiento' => $faker->date(),
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
