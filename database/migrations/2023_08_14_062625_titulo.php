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
        Schema::Create('titulo',function(Blueprint $table){
            $table->id();
            $table->string('nombre',100);
            $table->boolean('estaactivo')->default(true); 
            $table->integer('idnivelestudio');
            $table->foreing('idnivelestudio')->references('id')->on('nivelestudio');
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
        Schema::dropIfExists('titulo');
    }
};
