<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activo');
            $table->string('eva_comentario', 255);
            $table->integer('eva_calificacion');

            $table->unsignedBigInteger('hab_id');
            $table->foreign('hab_id')->references('hab_id')->on('habilidad');

            $table->unsignedBigInteger('alu_id');
            $table->foreign('alu_id')->references('alu_id')->on('alumno');

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
        Schema::dropIfExists('evaluacion');
    }
}
