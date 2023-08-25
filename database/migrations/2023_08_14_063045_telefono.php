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
        Schema::create('telefono', function (Blueprint $table) {
            $table->id(); 
            $table->string('telefono', 100);
            $table->boolean('esprincipal')->default(false);
            $table->boolean('estaactivo')->default(false); 
            $table->integer('idpersona');
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
        Schema::dropIfExists('telefono');
    }
};
