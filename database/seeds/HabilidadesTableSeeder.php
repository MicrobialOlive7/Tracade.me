<?php

use Illuminate\Database\Seeder;

class HabilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poleId = \App\Disciplina::where('dis_nombre', 'Pole Fitness')->value('id');
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Allegra',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Boomerang',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Cocoon',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /////
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Inversion Basica',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Marley',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Media Mariposa',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Teddy',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Toothbrush',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /**
         * Telas aereas
         */

        $TelasId = \App\Disciplina::where('dis_nombre', 'Telas aereas')->value('id');
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Bandera',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Catcher',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Curly Wurly',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /////
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Dislocado',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Estrella',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Monkey',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Split Balance',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Sylph',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
