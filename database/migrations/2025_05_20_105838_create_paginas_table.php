<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('paginas', function (Blueprint $table) {
        $table->id('id_pagina');
        $table->string('titulo');
        $table->text('descripcion');
        $table->dateTime('fecha_creacion');
        $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade'); // Creador
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
        Schema::dropIfExists('paginas');
    }
}
