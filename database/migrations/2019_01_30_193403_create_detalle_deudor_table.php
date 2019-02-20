<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDeudorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_deudor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('celular',15)->nullable();
            $table->string('skype',35)->nullable();
            $table->string('pais',50)->nullable();
            $table->string('nacionalidad',30)->nullable();
            $table->string('rfc',14);
            $table->string('razon_social',30);
            $table->string('direccion',100);
            
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
        Schema::dropIfExists('detalle_deudor');
    }
}
