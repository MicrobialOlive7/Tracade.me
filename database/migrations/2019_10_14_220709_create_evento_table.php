<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->string('eve_nombre');
            $table->dateTime('eve_fecha');
            $table->string('eve_descripcion', 255);
            $table->string('api_id', 255);
            $table->string('api_htmllink', 255);

            $table->unsignedBigInteger('gru_id');
            $table->foreign('gru_id')->references('id')->on('grupo');

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
        Schema::dropIfExists('evento');
    }
}
