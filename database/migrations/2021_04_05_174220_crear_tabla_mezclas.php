<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMezclas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mezclas', function (Blueprint $table) {
            $table->id();
            $table->string('sabor1')->nullable();
            $table->string('sabor2')->nullable();
            $table->string('sabor3')->nullable();
            $table->integer('porcentaje1')->nullable();
            $table->integer('porcentaje2')->nullable();
            $table->integer('porcentaje3')->nullable();
            $table->integer('usuario_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mezclas');
    }
}
