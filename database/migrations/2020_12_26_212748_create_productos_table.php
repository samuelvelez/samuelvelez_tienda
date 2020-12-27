<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            
            $table->string('description');
            $table->integer('cantidad');
            $table->tinyInteger('estado');
            $table->timestamps();
            $table->softDeletes();
            
        });

        Schema::table('productos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_vendedor');
        
            $table->foreign('id_vendedor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
