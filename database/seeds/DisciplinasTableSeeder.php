<?php

use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Disciplina::class)->create([
            'dis_nombre' => 'Pole Fitness',
            'dis_descripcion' => 'Discplina wlkwekwdekl'
        ]);

        factory(\App\Disciplina::class)->create([
            'dis_nombre' => 'Telas Aereas',
            'dis_descripcion' => 'Discplina wlkwekwdekl'
        ]);
    }
}
