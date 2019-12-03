<?php

use Illuminate\Database\Seeder;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Plan::class)->create();
        factory(\App\Academia::class)->create();

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

        for ($i = 1; $i < 11; $i++){

            $alumno = factory(\App\Alumno::class)->create([
                'id' => $i,
                'created_at' => \Carbon\Carbon::createFromDate(null, rand(1,12), rand(1, 28))
            ]);
            factory(\App\DisciplinaAlumno::class)->create([
                'alu_id' => $i,
                'dis_id' => rand(1,2)
            ]);

            $this->generateImage($alumno);
        }

        /**
         * Habilidades
         */
        $poleId = \App\Disciplina::where('dis_nombre', 'Pole Fitness')->value('id');
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Allegra',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Allegra_v.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Boomerang',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Bandera_V.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Cocoon',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Cocoon_V.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /////
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Inversion Basica',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Inversion_Basica_V.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Marley',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Marley_V.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Media Mariposa',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Media_Mariposa_V.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Teddy',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Teddy_V.mov',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Toothbrush',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Toothbrush_V.mov',
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
            'hab_video' => 'Bandera_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Catcher',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Catcher_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Curly Wurly',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Curly_Wurly_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /////
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Dislocado',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Dislocado_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Estrella',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Estrella_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Monkey',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Monkey_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Split Balance',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Split_Balance_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Sylph',
            'hab_imagen' => 'principal.jpg',
            'hab_video' => 'Sylph_V.mov',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /**
         * Evaluaciones
         */

        factory(\App\Evaluacion::class, 100)->create();

        //administrador
        factory(\App\Alumno::class)->create([
            'tipo_usuario' => 'admin'
        ]);
    }

    public function seedAlumno(){

    }

    protected function generateImage($alumno){
        $avatar = new InitialAvatar();
        if (!file_exists(storage_path('app\public\alumnos\\'.$alumno->id))) {
            mkdir(storage_path('app\public\alumnos\\'.$alumno->id));
        }

        $image = $avatar->name($alumno->alu_nombre." ".$alumno->alu_apellido_paterno)
            ->length(2)
            ->fontSize(0.5)
            ->size(450)
            ->background($this->rand_color())
            ->color('#fff')
            ->generate();
        $image->save(storage_path('app\public\alumnos\\'.$alumno->id.'\perfil.png'));
    }

    function rand_color() {
        $colors = array('#EA4C89', '#49C6E5', '#8965E0', '#FFD166', '#06D6A0');
        $index = array_rand($colors);
        return $colors[$index];
    }
}
