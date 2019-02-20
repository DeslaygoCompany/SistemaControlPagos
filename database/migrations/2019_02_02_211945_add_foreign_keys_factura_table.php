<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factura', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            /*Modifica y agrega la llave id_detalle_deudor foranea a la tabla deudor*/
            $table->integer('id_deudor')->unsigned()->nullable();
            $table->foreign('id_deudor')->references('id')->on('deudor')->onDelete('set null');
            
            /*Modifica y agrega la llave id_user foranea a la tabla detalle_factura*/
            $table->integer('id_detalle_factura')->unsigned()->nullable();
            $table->foreign('id_detalle_factura')->references('id')->on('detalle_factura')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factura', function (Blueprint $table) {
            /*hace un drop a la llave foranea id_deudor
            si es que ya existe*/
            $table->dropForeign('id_deudor');
            $table->dropColumn('id_deudor');
            
            /*hace un drop a la llave foranea id_detalle_factura
            si es que ya existe*/
            $table->dropForeign('id_detalle_factura');
            $table->dropColumn('id_detalle_factura');
        });
    }
}
