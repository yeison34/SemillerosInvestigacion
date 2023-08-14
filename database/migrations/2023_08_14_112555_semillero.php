
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
        Schema::Create('semillero',function(Blueprint $table){
            $table->id();
            $table->integer('idsede');
            $table->string('nombre',100);
            $table->string('correo',300);
            $table->string('descripcion',300);
            $table->string('mision',1000);
            $table->string('vision',1000);
            $table->string('valores',100);
            $table->string('objetivos',1000);
            $table->string('lineainvestigacion',1000);
            $table->string('presentacion',500);
            $table->string('resolucion',100);
            $table->timestamp('fecharesolucion');
            $table->string('archivoresolucion',1000);
            $table->integer('idciudad');
            $table->char('genero',2);
            $table->string('direccion',200);
            $table->boolean('estaactivo');
            $table->foreign('idsede')->references('id')->on('sedes');
            $table->timestamps();
        });
    }
     
    public function down()
    {
        Schema::dropIfExists('semillero');
    }
};