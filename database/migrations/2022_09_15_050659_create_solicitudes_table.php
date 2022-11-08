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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('solicitud_id');
            $table->date('fecha_muestra');
            $table->foreignId('paciente_id')->references('paciente_id')->on('pacientes');
            $table->foreignId('medico_id')->references('medico_id')->on('medicos');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('unidad_id')->references('unidad_id')->on('unidades');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
};
