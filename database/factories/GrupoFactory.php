<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Grupo::class, function (Faker $faker) {
    $disciplinaId = \App\Disciplina::where('dis_nombre', 'Pole Fitness')->value('id');
    $aulaId = \App\Aula::where('aul_salon', 'Aula 1')->value('id');
    return [
        'gru_nombre' => $faker->sentence(1),
        'gr_dia' => $faker->dayOfWeek,
        'gru_hora' => $faker->dateTime(),
        'dis_id' => $disciplinaId,
        'aul_id' => $aulaId,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
