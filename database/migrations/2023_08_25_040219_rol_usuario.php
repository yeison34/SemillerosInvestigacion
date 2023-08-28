<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_usuario', function (Blueprint $table) {

            $table->id();
            $table->integer('idusuario');
            $table->integer('idrol');
            $table->boolean('estaactivo')->nullable($value=false);
            $table->foreign('idusuario')->references('id')->on('usuario');
            $table->foreign('idrol')->references('id')->on('rol');
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
        Schema::dropIfExists('rol_usuario');
    }
};
