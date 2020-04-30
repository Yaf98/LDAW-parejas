<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioeventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioevento', function (Blueprint $table) {
            $table-> id('id_usuario_evento'); 
            $table-> foreign('id_evento')-> references('id_evento')->on('evento');
            $table-> foreign('id_usuario')-> references('id_usuario')->on('usuario'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarioevento');
    }
}
