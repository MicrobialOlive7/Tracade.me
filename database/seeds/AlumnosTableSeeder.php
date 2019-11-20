<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lastId = \App\Alumno::all()->last()->id;

        for ($i = $lastId+1; $i < $lastId+11; $i++){
            factory(\App\Alumno::class)->create([
                'id' => $i
            ]);
            factory(\App\DisciplinaAlumno::class)->create([
                'alu_id' => $i,
                'dis_id' => rand(1,2)
            ]);
        }

    }
}
