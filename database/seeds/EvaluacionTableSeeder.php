<?php

use Illuminate\Database\Seeder;

class EvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Evaluacion::class, 50)->create();
    }
}
