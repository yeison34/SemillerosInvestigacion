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
        Schema::Create('tipoidentificacion',function(Blueprint $table){
            $table->id();
            $table->integer('idnivelestudio');
            $table->integer('idtitulo');
            $table->integer('idestadoformacion');
            $table->integer('idinstitucionformacion');
            $table->timestamp('periodoinicio');
            $table->boolean('esactual')->default(true);
            $table->timestamp('periodofinal'); 
            $table->integer('idinstitucionformacion');
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
        Schema::dropIfExists('tipoidentificacion');
    }
};
