<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Aula::class, function (Faker $faker) {
    return [
        'aul_salon' => $faker->sentence(1),
        'aul_edificio' => $faker->sentence(1),
        'aul_campus' => $faker->sentence(1),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
