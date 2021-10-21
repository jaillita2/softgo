<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Especificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especificacion', function (Blueprint $table) {
            $table->id();
            $table->string('id_esp');
            $table->string('id_user');
            $table->string('titulo_esp');
            $table->string('fecha_esp');
            $table->string('semestre_esp');
            $table->string('descrip_esp');
            $table->binary('doc_esp');
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
        Schema::dropIfExists('especificacion');
    }
}
