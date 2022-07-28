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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('domingo', 20)->nullable(true)->default(null);
            $table->string('lunes', 20)->nullable(true)->default(null);
            $table->string('martes', 20)->nullable(true)->default(null);
            $table->string('miercoles', 20)->nullable(true)->default(null);
            $table->string('jueves', 20)->nullable(true)->default(null);
            $table->string('viernes', 20)->nullable(true)->default(null);
            $table->string('sabado', 20)->nullable(true)->default(null);
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
        Schema::dropIfExists('horarios');
    }
};
