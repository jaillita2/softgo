<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePliegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pliegos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('fechaPliego');
            $table->string('semestrePliego');
            $table->string('descripcionPliego');
            $table->string('archivoPliego');
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
        Schema::dropIfExists('pliegos');
    }
}
