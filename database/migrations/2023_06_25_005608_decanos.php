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
        Schema::create('decanos', function (Blueprint $table) {
            $table->char('coddecano',2);
            $table->char('nomdecano',40);
            
            $table->primary('coddecano');
            $table->char('facultad',2);
            $table->foreign('facultad')
            ->references('codFacultad')->on('facultades');
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
        Schema::dropIfExists('decanos');
    }
};
