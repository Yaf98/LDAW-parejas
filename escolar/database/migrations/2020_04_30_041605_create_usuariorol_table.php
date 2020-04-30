<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariorolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariorol', function (Blueprint $table) {
            $table-> id('id_usuario_rol'); 
            $table-> foreign('id_usuario')-> references('id_usuario')->on('usuario');
            $table-> foreign('id_rol')-> references('id_rol')->on('rol'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariorol');
    }
}
