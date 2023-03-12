<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('refID')->from(7890);
            $table->integer('userID');
            $table->string('name');
            $table->string('address');
            $table->string('contactNumber');
            $table->string('prefferedTime')->nullable();
            $table->string('status');
            $table->integer('container1')->nullable();
            $table->integer('container2')->nullable();
            $table->integer('container3')->nullable();
            $table->integer('container4')->nullable();
            $table->integer('price');
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
        Schema::dropIfExists('transactions');
    }
};
