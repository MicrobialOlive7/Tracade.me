<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Disciplina::class, function (Faker $faker) {
    return [
        'dis_nombre' => $faker->sentence(1),
        'dis_descripcion' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
