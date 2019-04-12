<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('account_id')->unsigned();
            $table->date('DOB');
            $table->string('gender');
            $table->string('phone', 20)->unique();
            $table->string('address');
            $table->string('nationality');
            $table->string('idCard/passport', 15)->unique();
            $table->integer('cusType_id')->unsigned();
            $table->string('company');
            $table->string('note');
            $table->foreign('account_id')->references ('id')->on('users')->onDelete('cascade');
            $table->foreign('cusType_id')->references ('id')->on('customertypes')->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
}
