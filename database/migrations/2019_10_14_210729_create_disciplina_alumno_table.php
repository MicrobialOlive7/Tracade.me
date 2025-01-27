<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_alumno', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();

            $table->unsignedBigInteger('alu_id');
            $table->foreign('alu_id')->references('id')->on('alumno');

            $table->unsignedBigInteger('dis_id');
            $table->foreign('dis_id')->references('id')->on('disciplina');

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
        Schema::dropIfExists('disciplina_alumno');
    }
}
