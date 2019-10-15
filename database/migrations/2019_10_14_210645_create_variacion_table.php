<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variacion', function (Blueprint $table) {
            $table->bigIncrements('var_id');

            $table->unsignedBigInteger('hab_id');
            $table->foreign('hab_id')->references('hab_id')->on('habilidad');

            $table->unsignedBigInteger('hab_var_id');
            $table->foreign('hab_var_id')->references('hab_id')->on('habilidad');

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
        Schema::dropIfExists('variacion');
    }
}
