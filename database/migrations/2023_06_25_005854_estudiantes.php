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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->char('codestudiante',4);
            $table->char('nomestudiante',30);
            $table->smallInteger('edaestudiante');
            $table->date('fechestudiante');
            $table->char('sexestudiante',1);
            $table->primary('codestudiante');

            $table->char('ciudad',5);
            $table->char('barrio',3);
            $table->char('programa',2);

            $table->foreign('ciudad')
            ->references('codciudad')->on('ciudades');

            $table->foreign('barrio')
            ->references('codbarrio')->on('barrios');

            $table->foreign('programa')
            ->references('codPrograma')->on('programas');
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
        Schema::dropIfExists('estudiantes');
    }
};
