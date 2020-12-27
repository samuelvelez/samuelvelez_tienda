<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('transacciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_comprador');
            
            $table->unsignedBigInteger('id_producto');
            
          
            $table->timestamps();
            
        });

        Schema::table('transacciones', function($table)
        {
            $table->foreign('id_comprador')->references('id')->on('users');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
        */
        Schema::create('transacciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
          
           
            $table->timestamps();
            
        });

        Schema::table('transacciones', function (Blueprint $table) {
            $table->unsignedBigInteger('id_comprador');
            $table->unsignedBigInteger('id_producto');
        
            $table->foreign('id_comprador')->references('id')->on('users');
            $table->foreign('id_producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('transacciones', function(Blueprint $table){
            $table->dropForeign('transacciones_id_comprador_foreign');
        $table->dropForeign('transacciones_id_producto_foreign');
        $table->dropIndex('transacciones_id_comprador_index');
        $table->dropIndex('transacciones_id_producto_index');
        $table->dropColumn('id_comprador');
        $table->dropColumn('id_producto');
        });
    }
}
