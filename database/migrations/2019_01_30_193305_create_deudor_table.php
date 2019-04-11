<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeudorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deudor', function (Blueprint $table) {
            
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('apellidos',100);
            $table->string('profesion',50);
            $table->string('estado_republica',50);
            $table->date('fecha_nacimiento');
            $table->string('estado_civil',20);
            $table->string('telefono',15)->nullable();
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
        Schema::dropIfExists('deudor');
    }
}
