<?php

use Illuminate\Database\Seeder;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lastId = \App\Alumno::withTrashed()->get()->last()->id;
        for ($i = $lastId+1; $i < $lastId+11; $i++){
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
