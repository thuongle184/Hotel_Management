<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillFoodOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_food_orders', function (Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->integer('foodOrder_id')->unsigned();
            $table->foreign('foodOrder_id')->references ('id')->on('orders')->onDelete('cascade');
            $table->foreign('bill_id')->references ('id')->on('bills')->onDelete('cascade');
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
        Schema::dropIfExists('bill_food_orders');
    }
}
