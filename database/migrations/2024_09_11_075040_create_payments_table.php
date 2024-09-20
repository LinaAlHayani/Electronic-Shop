<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Payment ID
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Order ID
            $table->foreignId('payment_method_id')->constrained()->onDelete('cascade'); // Payment Method ID
            $table->decimal('amount_paid', 8, 2); // Amount Paid
            $table->date('payment_date'); // Payment Date
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
