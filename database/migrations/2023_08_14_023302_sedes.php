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
        Schema::Create('sedes',function(Blueprint $table){
            $table->id();
            $table->string('nombre',100);
            $table->integer('idciudad');
            $table->foreign('idciudad')->references('id')->on('ciudad');
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
        Schema::dropIfExists('sedes');
    }
};