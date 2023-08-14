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
        Schema::create('paises', function (Blueprint $table) {
<<<<<<<< HEAD:database/migrations/2023_08_14_020454_create_paises_table.php

            $table->id(); 
            $table->string('nombre', 100);
            $table->boolean('estaactivo')->default(true); 
            
========
            $table->id(); 
            $table->string('nombre', 100);
            $table->boolean('estaactivo')->default(true); 

>>>>>>>> origin/rm_pedrotoro:database/migrations/2023_08_14_055206_create_paises_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paises');
    }
};
