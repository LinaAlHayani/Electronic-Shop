<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersItemsTable extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Order Item ID
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Order ID
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Product ID
            $table->integer('quantity'); // Quantity
            $table->decimal('price', 8, 2); // Price
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
    
}
