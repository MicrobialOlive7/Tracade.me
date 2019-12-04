<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Academia::class, function (Faker $faker) {
    return [
        'aca_nombre' => $faker->sentence(2),
        'aca_status' => 'inactiva',
        'aca_num_alumnos' => 50,
        'aca_fecha_corte' => '2019-12-25',
        'aca_adeudo' => 0.00,
        'pla_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];


});
