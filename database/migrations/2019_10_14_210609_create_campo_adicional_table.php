<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampoAdicionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo_adicional', function (Blueprint $table) {
            $table->bigIncrements('cad_id');
            $table->string('cad_nombre', 100);
            $table->string('cad_contenido', 255);

            $table->unsignedBigInteger('hab_id');
            $table->foreign('hab_id')->references('hab_id')->on('habilidad');

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
        Schema::dropIfExists('campo_adicional');
    }
}
