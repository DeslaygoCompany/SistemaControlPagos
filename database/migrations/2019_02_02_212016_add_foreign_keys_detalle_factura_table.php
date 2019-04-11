<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysDetalleFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_factura', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
            $table->engine = 'InnoDB';
            /*Modifica y agrega la llave id_factura foranea a la tabla detalle_factura*/
            $table->integer('id_factura')->unsigned();
            $table->foreign('id_factura')->references('id')->on('factura')->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_factura', function (Blueprint $table) {
            //
             /*hace un drop a la llave foranea id_factura
            si es que ya existe*/
            $table->dropForeign('id_factura');
            $table->dropColumn('id_factura');
        });
    }
}
