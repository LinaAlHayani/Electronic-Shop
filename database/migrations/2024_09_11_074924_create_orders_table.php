<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Order ID
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Customer ID
            $table->date('order_date'); // Order Date
            $table->string('order_status'); // Order Status
            $table->decimal('order_total', 8, 2); // Order Total
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
