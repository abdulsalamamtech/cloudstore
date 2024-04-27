<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_no')->unique();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->string('transaction_id')->nullable()->unique();
            $table->string('session_id')->unique();
            $table->decimal('total_price', 10, 2);
            $table->foreignId('payment_method_id')->constrained('payment_methods','id')->cascadeOnDelete();
            $table->foreignId('shipping_method_id')->constrained('shipping_methods','id')->cascadeOnDelete();
            $table->foreignId('order_status')->constrained('order_statuses','id')->cascadeOnDelete();
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
