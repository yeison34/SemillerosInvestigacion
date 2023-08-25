
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
            $table->string('correo',300)->nullable();
            $table->string('descripcion',300)->nullable();
            $table->string('mision',3000);
            $table->string('vision',3000);
            $table->string('valores',3000)->nullable();
            $table->string('objetivos',1000)->nullable();
            $table->string('lineainvestigacion',1000)->nullable();
            $table->string('presentacion',3000)->nullable();
            $table->string('numeroresolucion',100)->nullable();
            $table->timestamp('fecharesolucion')->nullable();;
            $table->string('archivoresolucion',1000)->nullable();;
            $table->string('logo',1000)->nullable();;
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