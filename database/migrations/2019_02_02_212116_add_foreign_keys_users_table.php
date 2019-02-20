<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
             /*Modifica y agrega la llave id_deudor foranea a la tabla deudor*/
            $table->integer('id_deudor')->unsigned()->nullable();
            $table->foreign('id_deudor')->references('id')->on('deudor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           
            /*hace un drop a la llave foranea id_deudor
            si es que ya existe*/
            $table->dropForeign('id_deudor');
            $table->dropColumn('id_deudor');
        });
    }
}
