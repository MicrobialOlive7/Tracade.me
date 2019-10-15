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
            $table->bigIncrements('alu_id');
            $table->string('alu_nombre', 100);
            $table->string('alu_apellio_paterno', 100);
            $table->string('alu_apellido_materno', 100);
            $table->string('alu_correo_electronico')->unique();

            $table->date('alu_fecha_nacimiento');
            $table->string('alu_biografia', 255);
            $table->string('alu_password');

            /* campo por default de 'users' de laravel */
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();

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
