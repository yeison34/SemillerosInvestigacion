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
        Schema::Create('coordinadores',function(Blueprint $table){
            $table->id();
            $table->integer('idsede');
            $table->integer('idpersona');
            $table->char('codigo',20)->unique();
            $table->string('foto',500);
            $table->integer('idprograma');
            $table->integer('idsemillero');
            $table->boolean('estaactivo');
            $table->foreign('idsede')->references('id')->on('sedes');
            $table->foreign('idpersona')->references('id')->on('persona');
            $table->foreign('idprograma')->references('id')->on('programa');
            $table->foreign('idsemillero')->references('id')->on('semillero');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coordinadores');
    }
};
