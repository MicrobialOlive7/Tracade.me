<?php

use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Creacion de las dos disciplinas principales
         */
        factory(\App\Disciplina::class)->create([
            'dis_nombre' => 'Pole Fitness',
            'dis_descripcion' => 'Discplina wlkwekwdekl'
        ]);
        factory(\App\Disciplina::class)->create([
            'dis_nombre' => 'Telas Aereas',
            'dis_descripcion' => 'Discplina wlkwekwdekl'
        ]);

        /**
         * Creacion de 6 aulas
         */
        factory(\App\Aula::class)->create([
            'aul_salon' => 'Aula 1'
        ]);

        factory(\App\Aula::class, 5)->create();

        /**
         * Creacion de grupos
         */
        factory(\App\Grupo::class, 5)->create();

        /**
         * Creacion de alumnos
         */
        factory(\App\Alumno::class, 10)->create();






    }
}
