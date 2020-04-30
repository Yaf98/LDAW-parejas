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
            $table-> id('id_alumno');
            $table-> string('nombre_alumno');
            $table-> float('promedio');
            $table-> string('carrera'); 
            $table-> boolean('mencion_honorifica');
            $table-> boolean('mencion_excelencia');
            $table-> boolean('asistencia');
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
