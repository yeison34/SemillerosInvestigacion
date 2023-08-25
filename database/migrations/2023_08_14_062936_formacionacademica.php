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
        Schema::Create('formacionacademica',function(Blueprint $table){
            $table->id();
            $table->integer('idnivelestudio');
            $table->integer('idtitulo');
            $table->integer('idestadoformacion');
            $table->integer('idinstitucionformacion');
            $table->timestamp('periodoinicio')->nullable();
            $table->boolean('esactual')->default(true);
            $table->timestamp('periodofinal')->nullable(); 
            $table->boolean('estaactivo')->default(true); 
            $table->integer('idpersona');
            $table->foreign('idnivelestudio')->references('id')->on('nivelestudio');
            $table->foreign('idtitulo')->references('id')->on('titulo');
            $table->foreign('idestadoformacion')->references('id')->on('estadoformacion');
            $table->foreign('idinstitucionformacion')->references('id')->on('institucionformacion');
            $table->foreign('idpersona')->references('id')->on('persona');
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
        Schema::dropIfExists('formacionacademica');
    }
};
