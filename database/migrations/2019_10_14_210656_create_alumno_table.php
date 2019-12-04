<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->softDeletes();
            $table->string('alu_nombre', 100);
            $table->string('alu_apellido_paterno', 100);
            $table->string('alu_apellido_materno', 100);
            $table->string('email')->unique();

            $table->date('alu_fecha_nacimiento');
            $table->string('alu_biografia', 255)->nullable();
            $table->string('password');

            /* campo por default de 'users' de laravel */
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();

            //para admin
            $table->unsignedBigInteger('aca_id');
            $table->foreign('aca_id')->references('id')->on('academia');

            $table->string('tipo_usuario', 20);

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
        Schema::dropIfExists('alumno');
    }
}
