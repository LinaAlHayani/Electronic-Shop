<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Customer ID
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('shipping_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamps(); // Includes registration date
        });
}

public function down()
    {
        Schema::dropIfExists('customers');
    }
}
