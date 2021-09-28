<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("combo", function (Blueprint $table) {
            $table->id();
            $table->integer("type");
            $table->boolean("lowSale");
            $table->integer("validity");
            $table->integer("quantityAvailable");
            $table->date("creationDate");
            //$table->foreign('product')->references('id')->on('product');
            //$table->foreign('item')->references('id')->on('item');
            //$table->foreign('comboHistory')->references('id')->on('comboHistory');
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
        Schema::dropIfExists("combo");
    }
}
