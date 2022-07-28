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
        Schema::create('barberias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable(false);
            $table->string('domingo', 20)->nullable(false);
            $table->string('lunes', 20)->nullable(false);
            $table->string('martes', 20)->nullable(false);
            $table->string('miercoles', 20)->nullable(false);
            $table->string('jueves', 20)->nullable(false);
            $table->string('viernes', 20)->nullable(false);
            $table->string('sabado', 20)->nullable(false);
            $table->string('estado', 50)->nullable(false);
            $table->string('municipio', 50)->nullable(false);
            $table->string('cp', 5)->nullable(false);
            $table->string('colonia', 50)->nullable(false);
            $table->string('calle', 50)->nullable(false);
            $table->string('n_casa', 10)->nullable(false);
            $table->string('coordenadas', 100)->nullable(false);
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
        Schema::dropIfExists('barberias');
    }
};
