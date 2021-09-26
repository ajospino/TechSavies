<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('model');
            $table->string('category');
            $table->string('brand');
            $table->integer('stock');
            $table->integer('price');
            $table->boolean('isPromoted')->nullable();
            //$table->foreign('combo')->references('id')->on('combo');
            //$table->foreign('item')->references('id')->on('item');
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
        Schema::dropIfExists('product');
    }
}