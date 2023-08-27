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
        Schema::Create('proyecto',function(Blueprint $table){
            $table->id();
            $table->string('codigo',100);
            $table->string('titulo',100);
            $table->timestamp('fechainicio',100);
            $table->timestamp('fechafinalizacion',100);
            $table->string('propuesta',100);
            $table->string('proyectofinal',100);
            $table->integer('idtipoproyecto');
            $table->integer('idestadoproyecto');
            $table->foreign('idestadoproyecto')->references('id')->on('estadoproyecto');
            $table->foreign('idtipoproyecto')->references('id')->on('tipoproyecto');
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
        Schema::dropIfExists('proyecto');
    }
};
