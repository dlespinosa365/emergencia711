<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->unique();;
            $table->bigInteger('cedula')->unique();
            $table->date('fecha_nac');
            $table->string('calles');
            $table->string('entrecalles')->nullable();
            $table->string('balneario')->default('Salinas Norte');
            $table->integer('manzana');
            $table->integer('solar');
            $table->string('referencia')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('telefono', 30)->nullable();
            $table->string('celular', 30);
            $table->string('emergencia');
            $table->boolean('sexo')->default(true);


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
}
