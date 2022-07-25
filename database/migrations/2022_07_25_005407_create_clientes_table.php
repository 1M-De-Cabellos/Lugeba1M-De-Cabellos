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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 40)->nullable(false);
            $table->string('apellido_p', 20)->nullable(false);
            $table->string('apellido_m', 20)->nullable(false);
            $table->date('fecha_nac')->nullable(false);
            $table->char('num_telefono', 10)->nullable(false)->unique(true);
            $table->string('email')->nullable(false)->unique(true);
            $table->string('password')->nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('clientes');
    }
};
