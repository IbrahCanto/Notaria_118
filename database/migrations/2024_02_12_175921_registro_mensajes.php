<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistroMensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_mensajes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 64);
            $table->string('Email', 64);
            $table->string('Telefono', 64);
            $table->string('Mensaje', 450);
            $table->string('Tipo_de_Informacion');
            $table->string('checkbox_form');
            $table->timestamp('fecha')->useCurrent();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_mensajes');
    }
}

