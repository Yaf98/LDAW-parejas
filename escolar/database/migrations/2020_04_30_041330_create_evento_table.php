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
             $table-> id('id_evento');
             $table-> string('nombre_evento');
             $table-> string('tipo_evento');
             $table-> date('fecha_evento');
             $table-> string('lugar_evento');
             $table-> integer('filas');
             $table-> integer('columnas');
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
