<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mediciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_mediciones', function (Blueprint $table) {
            $table->id();
            $table->date("fecha", 10);
            $table->integer("valorMedidor");
            $table->string("direccion");
            $table->integer("valor");
            $table->string("medida");
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
        Schema::dropIfExists('tabla_mediciones');
    }
}
