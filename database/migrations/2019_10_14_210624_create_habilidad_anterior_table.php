<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadAnteriorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidad_anterior', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activo');

            $table->unsignedBigInteger('hab_id');
            $table->foreign('hab_id')->references('hab_id')->on('habilidad');

            $table->unsignedBigInteger('hab_ant_id');
            $table->foreign('hab_ant_id')->references('hab_id')->on('habilidad');

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
        Schema::dropIfExists('habilidad_anterior');
    }
}
