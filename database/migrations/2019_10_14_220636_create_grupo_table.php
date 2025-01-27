<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->string('gru_nombre', 100);
            $table->string('gr_dia', 100);
            $table->dateTime('gru_hora');

            $table->unsignedBigInteger('dis_id');
            $table->foreign('dis_id')->references('id')->on('disciplina');

            $table->unsignedBigInteger('aul_id');
            $table->foreign('aul_id')->references('id')->on('aula');

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
        Schema::dropIfExists('grupo');
    }
}
