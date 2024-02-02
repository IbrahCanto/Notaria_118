<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tests', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Email');
            $table->string('Telefono');
            $table->string('Mensaje');
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
        Schema::dropIfExists('table_tests');
    }
}

