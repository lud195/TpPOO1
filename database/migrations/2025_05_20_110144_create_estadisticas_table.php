<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->id('id_estadistica');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->integer('total_accesos')->default(0);
            $table->integer('total_posteos')->default(0);
            $table->integer('total_comentarios')->default(0);
            $table->dateTime('ultima_actividad')->nullable();
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
        Schema::dropIfExists('estadisticas');
    }
}
