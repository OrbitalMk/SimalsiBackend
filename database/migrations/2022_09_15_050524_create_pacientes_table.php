<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('paciente_id');
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->date('nacimiento');
            $table->integer('edad')->virtualAs(new Expression('(TIMESTAMPDIFF(YEAR, nacimiento, CURDATE()))'));
            $table->string('inss', 10)->nullable()->unique();
            $table->string('telefono', 20)->nullable();
            $table->enum('sexo', ['Femenino', 'Masculino']);
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
        Schema::dropIfExists('pacientes');
    }
};
