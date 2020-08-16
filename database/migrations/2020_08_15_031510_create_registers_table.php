<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->string('genero');
            $table->integer('cantidad');
            $table->float('total');
            $table->Integer('idproduct')->unsigned();
            $table->foreign('idproduct')->references('id')->on('products')->onDelete('cascade');
            $table->Integer('idcategory')->unsigned();
            $table->foreign('idcategory')->references('id')->on('category')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
