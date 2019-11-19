<?php

use Illuminate\Database\Seeder;

class AulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Aula::class)->create([
            'aul_salon' => 'Aula 1'
        ]);

        factory(\App\Aula::class, 5)->create();
    }
}
