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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('userID')->from(1234);
            $table->string('name');
            $table->string('address');
            $table->string('contactNumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('container1')->nullable();
            $table->integer('container2')->nullable();
            $table->integer('container3')->nullable();
            $table->integer('container4')->nullable();
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
};
