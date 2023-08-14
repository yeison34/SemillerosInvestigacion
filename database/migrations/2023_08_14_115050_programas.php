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
        Schema::Create('programa',function(Blueprint $table){
            $table->id();
            $table->string('nombre',100);
            $table->integer('idfacultad');
            $table->boolean('estaactivo')->default(true);
            $table->foreign('idfacultad')->references('id')->on('facultad'); 
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
        Schema::dropIfExists('programa');
    }
};
