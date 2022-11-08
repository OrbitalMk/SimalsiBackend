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
        Schema::create('resultadoap', function (Blueprint $table) {
            $table->foreignId('solicitud_id')->references('solicitud_id')->on('solicitudap');
            $table->primary('solicitud_id');

            $table->string('descripcion_macroscopica');
            $table->string('resultado');
            $table->foreignId('patologo_id')->references('patologo_id')->on('patologos');
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
        Schema::dropIfExists('resultadoap');
    }
};
