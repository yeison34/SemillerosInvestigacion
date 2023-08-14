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
<<<<<<<< HEAD:database/migrations/2023_08_14_023217_pais.php
        Schema::create('paises', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre', 100);
            $table->boolean('estaactivo')->default(true); 
            $table->timestamps();
========
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->int('idciudad');
            $table->foreign('idciudad')->references('id')->on('ciudad');

>>>>>>>> origin/rm_pedrotoro:database/migrations/2023_08_14_055322_create_sedes_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2023_08_14_023217_pais.php
        Schema::dropIfExists('paises');
========
        Schema::dropIfExists('sedes');
>>>>>>>> origin/rm_pedrotoro:database/migrations/2023_08_14_055322_create_sedes_table.php
    }
};
