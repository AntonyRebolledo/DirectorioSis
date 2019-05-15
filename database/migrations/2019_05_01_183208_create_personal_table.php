<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('cargo');
            $table->string('correo');
            $table->string('direccion');
            $table->string('telefono');  
            $table->string('cumpleaños');
            $table->string('celular');
            $table->string('sec_part_nombre');
            $table->string('sec_part_telefono');
            $table->string('sec_part_correo');
            $table->string('foto');
            $table->unsignedInteger('puesto_id');
            $table->foreign('puesto_id')->references('id')->on('puestos')->onDelete('cascade');
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
        Schema::dropIfExists('personal');
    }
}
