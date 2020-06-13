<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoalumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventoalumno', function (Blueprint $table) {
             $table->increments('id_evento_alumno');
             $table->unsignedBigInteger('id_evento');
             $table->unsignedBigInteger('id_alumno');
             $table->foreign('id_evento')-> references('id_evento')->on('evento');
             $table->foreign('id_alumno')-> references('id_alumno')->on('alumno');
             $table->string('lugar_alumno');
             $table->integer('fila');
             $table->integer('columna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventoalumno');
    }
}
