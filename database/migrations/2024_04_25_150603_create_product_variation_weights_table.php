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
        Schema::create('product_variation_weights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products','id')->cascadeOnDelete()->nullable();
            $table->foreignId('variation_weight_id')->constrained('variation_weights','id')->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variation_weights');
    }
};
