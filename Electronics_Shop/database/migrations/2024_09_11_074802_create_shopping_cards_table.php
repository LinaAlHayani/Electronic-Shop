<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCardsTable extends Migration
{
    public function up()
    {
        Schema::create('shoppingcards', function (Blueprint $table) {
            $table->id(); // Cart ID
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->timestamps(); // Includes creation date
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
