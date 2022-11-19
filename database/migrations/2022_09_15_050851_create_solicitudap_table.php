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
        Schema::create('solicitudap', function (Blueprint $table) {
            $table->foreignId('solicitud_id')->references('solicitud_id')->on('solicitudes');
            $table->primary('solicitud_id');
            
            $table->foreignId('procedimiento_id')->references('procedimiento_id')->on('procedimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudap');
    }
};
