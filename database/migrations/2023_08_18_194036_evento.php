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
        Schema::Create('evento',function(Blueprint $table){
            $table->id();
            $table->string('codigo',100);
            $table->string('nombre',300);
            $table->string('descripcion',500);
            $table->timestamp('fechainicio')->nullable();
            $table->timestamp('fechafin')->nullable();
            $table->string('lugar',200)->nullable();
            $table->integer('idtipoevento');
            $table->integer('idmodalidadevento');
            $table->integer('idclasificacionevento');
            $table->foreign('idtipoevento')->references('id')->on('tipoevento');
            $table->foreign('idmodalidadevento')->references('id')->on('modalidadevento');
            $table->foreign('idclasificacionevento')->references('id')->on('clasificacionevento');
            $table->string('observaciones',1000)->nullable();
            $table->boolean('estaactivo')->default(true); 
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
        Schema::dropIfExists('evento');
    }
};
