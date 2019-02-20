<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysDeudorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deudor', function (Blueprint $table) {
             $table->engine = 'InnoDB';
            /*Modifica y agrega la llave id_detalle_deudor foranea a la tabla detalle_deudor*/
            $table->integer('id_detalle_deudor')->unsigned()->nullable();
            $table->foreign('id_detalle_deudor')->references('id')->on('detalle_deudor')->onDelete('cascade');
            
            /*Modifica y agrega la llave id_user foranea a la tabla detalle_deudor*/
            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deudor', function (Blueprint $table) {
            /*hace un drop a la llave foranea id_detalle_deudor
            si es que ya existe*/
            $table->dropForeign('id_detalle_deudor');
            $table->dropColumn('id_detalle_deudor');
            
            /*hace un drop a la llave foranea id_user
            si es que ya existe*/
            $table->dropForeign('id_user');
            $table->dropColumn('id_user');
        });
    }
}
