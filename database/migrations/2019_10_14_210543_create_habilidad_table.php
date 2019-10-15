<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidad', function (Blueprint $table) {
            $table->bigIncrements('hab_id');
            $table->string('hab_nombre', 100);
            /* usar select con valores predeterminados con dificultad en string (facil, dificl, etc) */
            $table->string('hab_dificultad', 50);
            $table->string('hab_descripcion', 255);

            $table->unsignedBigInteger('dis_id');
            $table->foreign('dis_id')->references('dis_id')->on('disciplina');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilidad');
    }
}
