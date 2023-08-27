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
        Schema::Create('persona',function(Blueprint $table){
            $table->id();
            $table->char('identificacion',20)->unique();
            $table->integer('idtipoidentificacion');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->timestamp('fechanacimiento')->nullable();
            $table->integer('idciudad')->nullable();
            $table->char('genero',2)->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('foto',1000)->nullable();
            $table->foreign('idtipoidentificacion')->references('id')->on('tipoidentificacion');
            $table->foreign('idciudad')->references('id')->on('ciudad');
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
        Schema::dropIfExists('persona');
    }
};
