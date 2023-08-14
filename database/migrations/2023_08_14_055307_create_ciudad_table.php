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
<<<<<<<< HEAD:database/migrations/2023_08_14_062516_tipoidentificacion.php
        Schema::Create('tipoidentificacion',function(Blueprint $table){
            $table->id();
            $table->string('nombre',100);
            $table->boolean('estaactivo')->default(true); 
            $table->timestamps();
========
        Schema::create('ciudad', function (Blueprint $table) {
            $table->id();
            $table->char('nombre',100);
            $table->integer('iddepartamento');
            $table->boolean('estaactivo')->nullable($value=false);

            $table->foreign('iddepartamento')->references('id')->on('departamento');


>>>>>>>> origin/rm_pedrotoro:database/migrations/2023_08_14_055307_create_ciudad_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2023_08_14_062516_tipoidentificacion.php
        Schema::dropIfExists('tipoidentificacion');
========
        Schema::dropIfExists('ciudad');
>>>>>>>> origin/rm_pedrotoro:database/migrations/2023_08_14_055307_create_ciudad_table.php
    }
};
