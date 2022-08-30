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
            $table->string('apellidos', 20)->nullable(false);
            $table->date('fecha_nac')->nullable(false);
            $table->char('num_telefonico', 10)->nullable(false)->unique(true);
            $table->string('email')->nullable(false)->unique(true);
            $table->string('password')->nullable(false);
            $table->string('api_token')->nullable(true);
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
