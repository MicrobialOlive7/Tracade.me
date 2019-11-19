<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\DisciplinaAlumno::class, function (Faker $faker) {
    return [
        'alu_id' => $faker->sentence(1),
        'dis_id' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
