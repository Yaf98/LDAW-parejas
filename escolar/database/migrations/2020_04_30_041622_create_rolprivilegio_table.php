<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolprivilegioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolprivilegio', function (Blueprint $table) {
            $table-> id('id_rol_privilegio');
            $table->unsignedBigInteger('id_rol'); 
            $table->unsignedBigInteger('id_privilegio');
            $table-> foreign('id_rol')-> references('id_rol')->on('rol');
            $table-> foreign('id_privilegio')-> references('id_privilegio')->on('privilegio'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolprivilegio');
    }
}
