<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_clients')->create('administrador', function (Blueprint $table) {
            $table->bigIncrements('adm_id');
            $table->string('adm_nombre', 50);
            $table->string('adm_apellido_paterno', 50);
            $table->string('adm_apellido_materno', 50);
            $table->string('amd_metodo_de_pago', 100);

            $table->unsignedBigInteger('aca_id');
            $table->foreign('aca_id')->references('aca_id')->on('academia');

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
        Schema::dropIfExists('administrador');
    }
}
